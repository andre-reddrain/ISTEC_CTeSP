# Class 7 - Query Language in MongoDB

## find() Syntax
**Filter** - Query criteria, enclosed in curly braces.
**Projection** - Fields to include or exclude in the result, also in curly braces.

```json
db.devices.find({ <filter> }, { <projection> })
```

### No filter - Return all
Returns all documents in the collection without any filtering.

```json
db.devices.find()
```

### Filter by Field
Matches the key-value pair exactly, case-sensitive.

```json
db.devices.find({ status: "active" })
```

### Comparison Operators Overview
<table>
<tr><th>Operator<th>Meaning<th>Example
<tr><td>$gt<td>><td>{ batteryLevel: { $gt: 80 }}
<tr><td>$gte<td>≥<td>{ temp: { $gte: 25 }}
<tr><td>$lt<td><<td>{ value: { $lt: 10 }}
<tr><td>$lte<td>≤<td>{ reading: { $lte: 5 }}
<tr><td>$ne<td>≠<td>{ status: { $ne: "active" }}
</table>

#### gt / lt

```json
db.devices.find({ batteryLevel: { $gt: 20, $lt: 80 } })
```

#### Date comparisons
ISODate function is used to specify the date and time in the correct format for MongoDB queries.
Allows for flexible date and time comparisons, such as finding documents within a specific date range.

```json
db.devices.find({
    timestamp: { $gte: ISODate("2025-10-28T00:00:00Z") }
})
```

#### in / nin
\$in allows to specify an array of values to match against.

```json
db.devices.find({
    type: { $in: ["Temperature", "Humidity"] }
})
```

\$nin is the opposite of \$in - it allows to match documents where the field's value is not in the specified array.

```json
db.devices.find({
    type: { $nin: ["Motion"] }
})
```

### Logical Operators
<table>
<tr><th>Operator<th>Purpose<th>Example
<tr><td>$and<td>Combine conditions<td>{ $and: [ { status: "active" }, { batteryLevel: { $gt: 50 } } ] }
<tr><td>$or<td>Either condition true<td>{ temp: { $or: [ { type: "Motion" }, { type: "Sound" } ] }
<tr><td>$not<td>Negate condition<td>{ batteryLevel: { $not: { $gt: 50 } } }
<tr><td>$nor<td>None of the conditions<td>$nor: [ { status: "active" }, { status: "pending" } ]
</table>

#### and
Used to combine multiple conditions in a query.
The query checks for exact matches on the 'status' and 'location' fields. The values must match the specified strings precisely.
Ensures that only documents satisfying both conditions are returned in the results.

```json
db.devices.find({
    $and: [
        { status: "active" },
        { location: "Kitchen" }
    ] 
})
```

### or
Used to match documents where either of the specified conditions is true.
The query checks for documents where the condition is either value1 or value2.

```json
db.devices.find({
    $or: [
        { type: "Temperature" },
        { type: "Humidity" }
    ] 
})
```

## Projection
Allow you to choose which fields to include or exclude from the query results, similar to the SELECT clause in SQL.
Help optimize query performance by returning only the necessary data, reducing network bandwidth and memory usage.
Enables you to customize the structure of the returned documents, making it easier to work with the data in the application.

**1 to include, 0 to exclude** specific fields.

```json
db.devices.find(
    { status: "active" },
    { deviceId: 1, type: 1, _id: 0 }
)
```

## sort() Syntax
Allows to order the results of your query based on one or more fields.
Can specify the sort order as either **ascending (1) or descending (-1)**.

```json
db.devices.find().sort({ batteryLevel: -1 })
```

### limit() and skip()
limit() to specify the maximum number of results to return.
skip() to offset the starting point of the results, allowing for pagination.

```json
db.devices.find().sort({ batteryLevel: -1 }).limit(5)
```