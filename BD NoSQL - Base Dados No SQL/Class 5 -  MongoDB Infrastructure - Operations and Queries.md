# Class 5 - MongoDB Infrastructure - Operations & Queries

## The MongoDB Ecosystem
**Database Server** - The core MongoDB server process that handles data, storage, query execution, and coordination of replication and sharding.
**Client Shell** - The interactive MongoDB sheel (mongosh) used to interact with the database, run queries, and manage the database.
**Compass GUI** - The official MongoDB GUI tool that provides a visual interface for managing the database, exploring data, and performing operations.
**Tools** - Utility tools like mongodump, mongoimport, and mongostat that enable data import/export, monitoring, and management of the MongoDB environment.

## MongoDB Components
Client - Mongos Router - Mongod instances - Replica set/shards

## Deployment Options
<table>
<tr><th>Environment<th>Description<th>Example
<tr><td>Local<td>Developer setup<td>Compass or CLI
<tr><td>Atlas Cloud<td>Fully managed<td>MongoDB Atlas
<tr><td>Self-hosted Cluster<td>Production servers<td>Docker / Kubernetes
</table>

## Replica Set
A replica set is a group of MongoDB servers that maintain the same dataset. This provides high availability and data redundancy, ensuring that your data is always accessible and protected.

### Replica Set Members
**Primary** - Receives all writes
**Secondary** - Replicates from primary
**Arbiter** - Votes in elections, no data

### Advantages
**High availability** - MongoDB replica sets provide high availability by maintaining multiple copies of the data across different servers, ensuring that the database remains accessible even if one or more servers fail.
**Data redundancy** - By replicating data across multiple servers, MongoDB replica sets provide data redundancy, protecting against data loss and ensuring the integrity of your data.
**Automatic Failover** - In the event of a primary node failure, the replica set automatically promotes a secondary node to become the new primary, ensuring seamless continuity of service.
**Read scaling** - Replica sets allow you to distribute read operations across multiple secondary nodes, improving the overall read performance and throughput of your MongoDB deployment.

### Replica Set Example (JSON Config)
```json
{
    "_id": "rs0",
    "members": [
        { "_id": 0, "host": "mongo1:27017" },
        { "_id": 1, "host": "mongo2:27017" },
        { "_id": 2, "host": "mongo3:27017", "arbiterOnly": true },
    ]
}
```

### Replica Set Commands
**rs.initiate()** - Initializes a new replica set
**rs.add("mongo2:27017")** - Adds a new member to the replica set
**rs.status()** - Checks the current status of the replica set
**rs.addarb("mongo3:27017")** - Adds an arbiter node to the replica set

### Limitations of Replication
**Increased write latency** - Replicating data to multiple server can introduce additional latency for write operations, as data must be written to the primary and then propagated to the secondaries.
**Conflicts if not properly synchronized** - If the replication process is not properly configured and monitored, data conflicts can arise between the primary and secondary nodes, leading to potential data inconsistencies.
**More storage usage** - Maintaining multiple copies of the same data across the replica set requires more storage capacity compared to a single-server deployment.

## MongoDB Sharding
Sharding is a powerful technique for scaling mongodb by distributing data across multiple servers, allowing you to handle larger datasets and improve overall system performance.

**Handle very large datasets** - Sharding allows you to scale your MongoDB deployment to handle massive amounts of data by distributing it across multiple servers.
**Increase write throughput** - By splitting the write load across multiple shards, sharding can significantly improve the overall write performance of your MongoDB cluster.
**Balance load across machies** - Sharding automatically distributes the data and query load across the shards, ensuring that no single server becomes a bottleneck in your system.

## Shared Cluster Architecture
Is the foundation of MongoDB's scalability. It consists of 3 key components: Mongos, Shards and Config Servers.
Mongos acts as the query router, directing client requests to the appropriate shards. The shards themselves are replica sets that store the partitioned data.
The config servers maintain the metadata about the cluster, enabling efficient routing and coordination.

## Shard Key
**What is** - The shard key is the field or set of fields in a MongoDB document that determines how the data is distributed across the shards in a shared cluster.
**Importance** - Choosing the right shard key is critical for effective sharding. It determines the data distribution and has a significant impact on the performance and scalability of the shared cluster.
**Considerations** - When selecting a shard key, you should consider factors such as data access patterns, query distribution, and the ability to evenly distribute data across shards.
**Examples** - Common shard key examples include: userID, productID, date, or a combination of fields like { region: 1, customerId: 1 }.

## Advantages
**Infinite horizontal scalability** - Shards can be created on demand and only require the addition of hardware (horizontal scaling) and are not limited by anything else.
**Independent growth of storage** - Since data is sharded through different instances, adding storage is only needed in shards that are approaching current storage limit.
**Reduced load per node** - Since we are dealing with multiple shards holding shared data, writes and reads are routed to the correct shard and only create load on that shard.
**Write scaling** - Each shard is ready to take writes on the data that matches its shard key. No other instances are loaded on write, which makes it easier for writing across multiple shards.

## Limitations
**Difficult to re-balance later** - If the wrong shard keys are selected, it might pose problems to rebalance load across the multiple shards of the system.
**Complex cluster management** - With more hardware, comes more complexity in management. Sharding creates the need for more Mongod instances, which in turn requires more hardware.
**Require careful shard key design** - Defining the correct shard keys for the application is crucial and it's the only way to mitigate the two earlier limitations.