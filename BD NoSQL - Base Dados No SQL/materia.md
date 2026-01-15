## Class 2 - NoSQL Concepts

### Meaning of NoSQL
"Not only SQL". They are not meant to replace traditional SQL databases, but rather complement them for specific use cases.
NoSQL databases prioritize flexibility in data modeling and scalability to handle large volumes of unstructured data, unlike the rigid schema-based approach of SQL databases.
NoSQL databases are designed to store and process unstructured and semi-structured dta, such as **JSON documents, key-value pairs, and graph data**, which are not well-suited for the tabular structure of traditional relational databases.

### Characteristics of NoSQL Databases
**Schema-less** - They do not enforce a fixed schema, allowing for greater flexibility in data modeling and storage.
**Distributed** - They are designed to be distributed across multiple servers, enabling scalability and fault tolerance.
**High availability** - They prioritize availability and partition tolerance, ensuring that the system remains operational even in the face of network failures or other disruptions.
**Designed for modern workloads** - They are optimized to handle large volumes of unstructured and semi-structured data, as well as real-time, high-throughput applications.

### Document-Oriented Databases
Document-oriented databases store data in a flexible, schema-less format, usually as **JSON or BSON documents**. These databases are designed to handle unstructured and semi-structured data, making them well-suited for applications that require dynamic and scalable data storage.
```json
{
    "sensorId": 101,
    "location": "Living Room",
    "temperature": 23.5,
    "timestamp": "2025-10-08T09:00:00Z"
}
```

#### Features
**Nested and flexible structure** - Documents have a hierarchical, nested structure, allowing for flexibility in data representation.
**Easy to map to programming objects** - The document structure maps naturally to programming language objects, simplifying data access and manipulation.
**Supports indexing and complex queries** - Document-oriented databases allow for the creation of indexes and support advanced querying capabilities beyond simple key-value lookups.

#### Ideal Use Cases
**IoT Sensor Data** - Capture and store real-time sensor data from connected devices.
**Content management** - Manage and store unstructured content like articles, blog posts, and multimedia.
**User profiles** - Store and retrieve user information, preferences, and activity history.
**Product catalogs** - Maintain flexible, schema-less product data and attributes.

### Key-Value Databases
Key-value databases are the simplest type of NoSQL databases. Data is stored as **pairs of keys and values**, where the **key acts as a unique identifier** for the associated value.
The value can be **any type of data**.
They are known for their speed and simplicity, making them well-suited for **caching, session storage** and other applications that require fast reads and writes.

Ex:
Key - user:1 / Value - { "name": "Alice", "age": 28 }

#### Features
**Very fast for reads/writes** - Optimized for fast and efficient read and write operations.
**No complex queries** - Simple data model, which means they are not designed for complex queries or analytical operations.
**Usually in-memory** - Designed to operate primarily in-memory, which allows for extremely fast data access.

#### Ideal Use Cases
**Caching** - Storing frequently accessed data in-memory for faster retrival.
**Session Storage** - Storing user session information for web applications.
**Gaming leaderboards** - Storing and updating real-time game scores and rankings.

### Column-Family Databases
Column-family databases are a type of NoSQL database that store data in columns grouped by families.
Designed for analytical queries and can scale linearly across clusters.

Ex:
Row Key --- col1 --- col2 --- col3
user:1  --- A    --- B    --- C
user:2  --- D    --- E    --- F

#### Features
**Great for analytical queries** - Optimized for performing complex analytical queries across large datasets stored in a distributed manner.
**Scales linearly across clusters** - Can easily scale out by adding more nodes to the cluster, allowing them to handle increasing data volumes and workloads.

#### Ideal Use Cases
**Time-series data** - Storing and analyzing data that is time-dependent, such as sensor readings, stock prices, or user activity over time.
**Logs** - Storing and analyzing large volumes of unstructured log data, such as server logs, application logs, or security logs.
**Analytics** - Performing complex analytical queries and data processing on large datasets, leveraging the scalability and flexibility.
**Sensor data** - Collecting and storing data from IoT devices, sensors, and other connected systems, often with high volume and velocity requirements.

### Graph Databases
Graph databases are a type of NoSQL database that store data as nodes and edges, focusing on the relationship between data.
Particularly useful for applications that require complex query patterns, such as social networks, recommendation systems, and fraud detection.

#### Ideal Use Cases
**Social Networks** - Modeling relationships between people, content and activities.
**Recommendations** - Suggesting relevant products, content, or connections based on user behavior and preferences.
**Fraud detection** - Identifying suspicious patterns and relationships to detect fraudulent activities.

## Summary
<table>
<tr><th>Type<th>Model<th>Examples<th>Strength<th>Weakness
<tr><td>Document<td>JSON Docs<td>MongoDB<td>Flexible, powerful queries<td>Large doc size
<tr><td>Key-Value<td>Pair<td>Redis<td>Speed<td>Simple ops only
<tr><td>Column<td>Columns<td>Cassandra<td>Scalability<td>Complex setup
<tr><td>Graph<td>Nodes/Edges<td>Neo4j<td>Relationships<td>Less suitable for aggregates
</table>