# Class 6 - CRUD Operations in MongoDB
**C** - Create - insertOne, insertMany
**R** - Read - find, findOne
**U** - Update - updateOne, updateMany, replaceOne
**D** - Delete - deleteOne, deleteMany

## Basic Connection Commands
**show dbs** - Lists all the databases available on the MongoDB server.
**use test** - Switches to the 'test' database, which is the default database.
**show collections** - Displays all the collections in the current database.
**db.createCollection("devices")** - Creates a new collection named 'devices' in the current database.

## Create Operations Overview
Add new documents to a collection - Equivalent to INSERT in SQL.

### insertOne
```json
db.devices.insertOne({
    "deviceId": "D102",
    "type": "Humidity",
    "location": "Kitchen",
    "status": "active"
})
```

### insertMany
```json
db.devices.insertMany([
    { "deviceId": "D103", "type": "Motion", "location": "Garage" },
    { "deviceId": "D104", "type": "Temperature", "location": "Office" }
])
```

### Auto-generated _id
**Unique Identifier** - MongoDB automatically assigns a unique _id field to each document.
**Objectid data type** - The _id field is of the ObjectId data type, which ensures uniqueness across the collection.
**Porpuse of _id** - The _id field serves as the primary key for the document, allowing efficient querying and indexing.

## Handling Duplicate keys
**Duplicate Key error** - If you try to insert a document with the same _id as an existing document, MongoDB will throw a duplicate key error.
**Automatically generated _id** - To avoid this error, it's recommended to let MongoDB automatically generate the _id field, which ensures uniqueness.
**Upsert option** - Alternatively, you can use the upsert option, which will insert a new document if it doesn't exist, of update the existing document if it does.

### Inserting Nested documents
```json
db.devices.insertOne({
    "deviceId": "D105",
    "type": "Environment",
    "sensors": [
        { "type": "Temperature", "value": 22.3 },
        { "type": "Humidity", "value": 45 },
    ]
})
```

## Update Operations
Modify existing documents in a collection, similar to UPDATE in SQL.

### updateOne()
Used to modify a single document that matches the specified filter criteria.

```json
db.devices.updateOne(
    { "deviceId": "D102" },
    { $set: { "status": "inactive" } }
)
```

### updateMany()
Used to efficiently modify multiple documents that match the specified filter criteria.

```json
db.devices.updateMany(
    { "status": "inactive" },
    { $set: { "lastChecked": ISODate("2025-10-29T09:00:00Z") } }
)
```

### replaceOne()
Used to completely replace an existing document with a new one. Useful when you need to update a document with a completely different structure or set of fields.
Unlike updateOne(), which modifies specific fields, replaceOne() overwrites the entire document, preserving the document's _id field.

```json
db.devices.replaceOne(
    { "deviceId": "D104" },
    { "deviceId": "D104", "type": "Temp/Humidity", "location": "Office" }
)
```

### $inc and $rename
```json
db.devices.updateOne(
    { "deviceId": "D105" },
    { $inc: { "batteryLevel": -10 }, $rename: { "location": "room" } }
)
```

### Update Operators
<table>
<tr><th>Operator<th>Purpose<th>Example
<tr><td>$set<td>Modify field value<td>{ $set: { status: "active" } }
<tr><td>$inc<td>Increment numeric<td>{ $inc: { count: 1 } }
<tr><td>$unset<td>Remove field<td>{ $unset: { oldField: "" } }
<tr><td>$rename<td>Rename field<td>{ $rename: { location: "room" } }
<tr><td>$push<td>Add element to array<td>{ $push: { sensors: { type: "CO2", value: 400 } } }
<tr><td>$pull<td>Remove element from array<td>{ $pull: { sensors: { type: "Temp" } } }
<tr><td>$addToSet<td>Add unique element to array<td>{ $addToSet: { sensors: { type: "Humidity", value: 60 } } }
<tr><td>$pop<td>Remove first or last element from array<td>{ $pop: { sensors: -1 } }
</table>

## Delete Operations
Delete documents from a collection. Equivalent to DELETE in SQL.

### deleteOne()
```json
db.devices.deleteOne({ "deviceId": "D103" })
```

### deleteMany()
```json
db.devices.deleteMany({ "status": "inactive" })
```