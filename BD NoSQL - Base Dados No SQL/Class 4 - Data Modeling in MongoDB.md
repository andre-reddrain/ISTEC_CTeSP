# Class 4 - Data Modeling in MongoDB

## Schema in MongoDB
**Defines data organization** - The schema defines how data is logically structured and organized in MongoDB.
**Not enforced by the database** - The schema is not enforced by the MongoDB database itself, but rather by the developers who are building the application.

## Why Schema Design Matters
**Query Performance** - Affects how efficiently you can query and retrieve data from the database.
**Storage efficiency** - Well-designed schemas can reduce data duplication and optimize storage utilization.
**Maintainability** - A clear, well-thought-out schema makes it easier to understand and work with the data model over time.
**Scalability** - A schema that anticipates growth and change can help ensure that the application scales effectively.

## Embedding
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

### Advantages
**One query retrieves all data** - By embedding related data in a single document, you can retrieve all the necessary information with a single query, improving performance.
**Simpler to read and maintain** - Embedded documents have a clear, nested structure, making the data easier to understand and manage for developers.
**Atomic updates** - Updates to embedded documents are atomic, ensuring data integrity and consistency within a single document.

### When to Embed
**1-to-few relationships** - Embedding can be beneficial to retrieve all related data in a single query.
**Data is accessed together** - If the embedded data is frequently accessed together, embedding can improve query performance and simplify the application logic.
**Subdocuments are not shared with others** - When the embedded subdocuments are not shared or referenced by other documents, embedding is a suitable choice.

### Limitations
**Document size limit** - MongoDB has a 16MB document size limit, which can be a constraint for embedding large ammounts of data.
**Reduntant data** - Embedding related data can lead to duplication of information if the same data is repeated across multiple documents.
**Difficult partial updates** - Updating a specific element within a large nested array can be challenging and may require complex query operations.

## Referencing
Referencing in MongoDB allows you to store related data in separate collections and **link them using unique ids**, providing a flexible and scalable way to manage complex data structures.

Ex:
```json
// devices
{ "_id": 1, "type": "Temperature", "location": "Office" }

// reading
{ "deviceId": 1, "timestamp": "2025-10-08T09:00:00Z", "value": 22.4 }
```

### Advantages
**Avoids document size limits** - Allows you to store related data in separate collections, avoiding the 16MB document size limit.
**Independent updates** - You can update related data independently without affecting the other documents.
**Shared data between documents** - Enables you to share data between multiple documents, reducing data duplication.

### When to Reference
**1-to-many (large) or many-to-many relationships** - When the relationship between the data is 1-to-many or many-to-many, referencing can be advantageous.
**Data must be reused** - Useful when the related data needs to be reused across multiple documents or collections, allowing for shared data between documents.
**Related data changes frequently** - Preferred when the related data changes frequently, as it allows for independent updates without affecting the main document.

### Limitations
**Requires multiple queries or aggregation** - Referencing data across multiple collections requires using complex database operations like $lookup to join the data, leading to more complex queries.
**More complex to manage consistency** - Ensuring data consistency across referenced collections can be more challenging, as updates to one collection may need to be reflected in the other.

## Embedded vs Referenced
<table>
<tr><th>Feature<th>Embedded<th>Referenced
<tr><td>Query speed<td>Fast (1 read)<td>Slower (join needed)
<tr><td>Updates<td>Simple<td>Independent
<tr><td>Data size<td>Limited<td>Unlimited
<tr><td>Data reuse<td>Hard<td>Easy
<tr><td>Use case<td>1-to-few<td>1-to-many / many-to-many
</table>