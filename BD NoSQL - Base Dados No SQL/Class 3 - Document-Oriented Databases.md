# Class 3 - Document-Oriented Databases

## JSON
JSON (**JavaScript Object Notation**) is a lightweight, text-based data format that is easy for humans to read and write, and easy for machines to parse and generate.
Widely used for data exchange and storage, particularly in web applications and APIs.

### JSON Structure
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

### JSON vs Table Rows
<table>
<tr><th>Concept<th>SQL<th>JSON/NoSQL
<tr><td>Record<td>Row<td>Document
<tr><td>Table<td>Table<td>Collection
<tr><td>Schema<td>Fixed<td>Dynamic
<tr><td>Relationships<td>Joins<td>Embedded objects
</table>

## BSON
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

## JSON vs BSON
<table>
<tr><th>Feature<th>JSON<th>BSON
<tr><td>Format<td>Text<td>Binary
<tr><td>Performance<td>Human Friendly<td>Machine Efficient
<tr><td>Extra types<td>Limited<td>Many (Date, ObjectId...)
<tr><td>Used in<td>APIs, Config files...<td>MongoDB Storage
</table>

## Collections
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

## Documents
Each document in MongoDB is a self-contained unit that can store nested arrays and sub-objects, allowing for flexible and hierarchical data representation.
This document-oriented approach contrasts with the rigid, tabular structure of traditional relational databases.

### Advantages
**Flexbile and human-readable** - JSON documents are easy for humans to read and write.
**No need for migrations** - JSON documents can evolve over time without requiring complex schema migrations.
**Store complex, nested data easily** - JSON documents can effortlessly represent hierarchical data structures, enabling the storage of rich, nested information.