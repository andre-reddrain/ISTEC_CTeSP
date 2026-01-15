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
<table>
<tr><th>Row Key<th>col1<th>col2<th>col3
<tr><td>user:1<td>A<td>B<td>C
<tr><td>user:2<td>D<td>E<td>F
</table>

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

## Class 3 - Document-Oriented Databases

### JSON
JSON (**JavaScript Object Notation**) is a lightweight, text-based data format that is easy for humans to read and write, and easy for machines to parse and generate.
Widely used for data exchange and storage, particularly in web applications and APIs.

#### JSON Structure
**Built from key-value pairs** - Structured as a collection of key-value pairs.
**Supports strings** - Can represent data in the form of strings.
**Supports numbers** - Can represent numeric data, both integers and floating-point values.
**Supports arrays** - Can represent data in the form of arrays, which can contain values of different data types.
**Supports objects** - Can represent structured data in the form of objects, which are collections of key-value pairs.
**Supports booleans and null** - Can represent boolean values (true/false) and the null value.

```json
{
    "name": "Alice",
    "age": 25,
    "skills": ["Python", "C++"],
    "address": {
        "city": "Lisbon",
        "country": "Portugal"
    }
}
```

#### JSON vs Table Rows
<table>
<tr><th>Concept<th>SQL<th>JSON/NoSQL
<tr><td>Record<td>Row<td>Document
<tr><td>Table<td>Table<td>Collection
<tr><td>Schema<td>Fixed<td>Dynamic
<tr><td>Relationships<td>Joins<td>Embedded objects
</table>

### BSON
BSON (**Binary JSON**) is MongoDB's internal format for storing and querying data.
This binary representation is more efficient for storage and indexing compared to the human-readable JSON format.

**Adds extra data types** - Adds support for additional data types beyond the basic JSON types, such as Date, ObjectId and Binary data.
**Efficient Storage** - More compact and efficient for storage than JSON.
**Fast Parsing and Querying** - Can be parsed and queried more quickly than plain text JSON, as it is optimized for fast processing by the database.
**Indexing support** - BSON's binary format allows for more efficient indexing of data, improving query performance.
```json
{
    "_id": ObjectId("6522a81f1c9f8d12e5a99e11"),
    "name": "Alice",
    "age": NumberInt(25),
    "created_at": ISODate("2025-10-08T09:00:00Z")
}
```

### JSON vs BSON
<table>
<tr><th>Feature<th>JSON<th>BSON
<tr><td>Format<td>Text<td>Binary
<tr><td>Performance<td>Human Friendly<td>Machine Efficient
<tr><td>Extra types<td>Limited<td>Many (Date, ObjectId...)
<tr><td>Used in<td>APIs, Config files...<td>MongoDB Storage
</table>

### Collections
Collection is a **group of related documents**, similar to how a table stores rows in a relational database.
Unlike tables, **collections do not require a fixed schema**, allowing for greater flexibility in data storage and representation.

<table>
<tr><th>SQL<th>MongoDB
<tr><td>Table<td>Collection
<tr><td>Row<td>Document
<tr><td>Column<td>Field
<tr><td>Schema<td>Optional
<tr><td>Join<td>$lookup or embedded objects
</table>

**Lowercase names** - Use lowercase letters for collection names
**Underscores if needed** - Underscores to separate words in collection .names.
**Avoid spaces or special characters** - Do not use spaces or special characters in collection names.

MongoDB creates a collection automatically when a document is inserted.

### Documents
Each document in MongoDB is a self-contained unit that can store nested arrays and sub-objects, allowing for flexible and hierarchical data representation.
This document-oriented approach contrasts with the rigid, tabular structure of traditional relational databases.

#### Advantages
**Flexbile and human-readable** - JSON documents are easy for humans to read and write.
**No need for migrations** - JSON documents can evolve over time without requiring complex schema migrations.
**Store complex, nested data easily** - JSON documents can effortlessly represent hierarchical data structures, enabling the storage of rich, nested information.

## Class 4 - Data Modeling in MongoDB

### Schema in MongoDB
**Defines data organization** - The schema defines how data is logically structured and organized in MongoDB.
**Not enforced by the database** - The schema is not enforced by the MongoDB database itself, but rather by the developers who are building the application.

### Why Schema Design Matters
**Query Performance** - Affects how efficiently you can query and retrieve data from the database.
**Storage efficiency** - Well-designed schemas can reduce data duplication and optimize storage utilization.
**Maintainability** - A clear, well-thought-out schema makes it easier to understand and work with the data model over time.
**Scalability** - A schema that anticipates growth and change can help ensure that the application scales effectively.

### Embedding
Allows you to store related data within a single mongodb document, similar to nesting objects in JSON.
This can simplify data access and retrieval.
Ex:
```json
{
    "userId": 1,
    "name": "John",
    "addresses": [
        {
            "city": "Lisbon",
            "zip": "1000-001"
        },
        {
            "city": "Porto",
            "zip": "4000-002"
        }
    ]
}
```

#### Advantages
**One query retrieves all data** - By embedding related data in a single document, you can retrieve all the necessary information with a single query, improving performance.
**Simpler to read and maintain** - Embedded documents have a clear, nested structure, making the data easier to understand and manage for developers.
**Atomic updates** - Updates to embedded documents are atomic, ensuring data integrity and consistency within a single document.

#### When to Embed
**1-to-few relationships** - Embedding can be beneficial to retrieve all related data in a single query.
**Data is accessed together** - If the embedded data is frequently accessed together, embedding can improve query performance and simplify the application logic.
**Subdocuments are not shared with others** - When the embedded subdocuments are not shared or referenced by other documents, embedding is a suitable choice.

#### Limitations
**Document size limit** - MongoDB has a 16MB document size limit, which can be a constraint for embedding large ammounts of data.
**Reduntant data** - Embedding related data can lead to duplication of information if the same data is repeated across multiple documents.
**Difficult partial updates** - Updating a specific element within a large nested array can be challenging and may require complex query operations.

### Referencing
Referencing in MongoDB allows you to store related data in separate collections and **link them using unique ids**, providing a flexible and scalable way to manage complex data structures.

Ex:
```json
// devices
{ "_id": 1, "type": "Temperature", "location": "Office" }

// reading
{ "deviceId": 1, "timestamp": "2025-10-08T09:00:00Z", "value": 22.4 }
```

#### Advantages
**Avoids document size limits** - Allows you to store related data in separate collections, avoiding the 16MB document size limit.
**Independent updates** - You can update related data independently without affecting the other documents.
**Shared data between documents** - Enables you to share data between multiple documents, reducing data duplication.

#### When to Reference
**1-to-many (large) or many-to-many relationships** - When the relationship between the data is 1-to-many or many-to-many, referencing can be advantageous.
**Data must be reused** - Useful when the related data needs to be reused across multiple documents or collections, allowing for shared data between documents.
**Related data changes frequently** - Preferred when the related data changes frequently, as it allows for independent updates without affecting the main document.

#### Limitations
**Requires multiple queries or aggregation** - Referencing data across multiple collections requires using complex database operations like $lookup to join the data, leading to more complex queries.
**More complex to manage consistency** - Ensuring data consistency across referenced collections can be more challenging, as updates to one collection may need to be reflected in the other.

### Embedded vs Referenced
<table>
<tr><th>Feature<th>Embedded<th>Referenced
<tr><td>Query speed<td>Fast (1 read)<td>Slower (join needed)
<tr><td>Updates<td>Simple<td>Independent
<tr><td>Data size<td>Limited<td>Unlimited
<tr><td>Data reuse<td>Hard<td>Easy
<tr><td>Use case<td>1-to-few<td>1-to-many / many-to-many
</table>