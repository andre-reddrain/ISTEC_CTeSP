# Class 8 - Aggregation Framework in MongoDB

## Aggregation pipeline
Is a sequence of data processing stages that transform documents step-by-step.
Each stage in the pipeline receives the output from the previous stage, allowing you to build complex data transformations and analytics.

Input - Stage 1 - Stage 2 - Stage 3 - Output

**Each stages receives & outputs documents!**

### Common stages

#### \$match
Filters documents early - improves performance.
Equivalent to the find() method, but with the added benefit of being part of a more powerful pipeline.

```json
{ $match: { type: "Temperature" } }
```

#### \$project
Select, rename, compute new fields.
This powerful stage gives full controll over the output of your pipeline, enabling you to transform and shape the data to meet your specific analytical needs.

```json
{
    $project: {
        deviceId: 1,
        value: 1,
        readingInFahrenheit: { $multiply: ["$value", 1.8] }
    }
}

// Rename fields
{ $project: { temp: "$value" } }
```

#### \$group 
Aggregate values across documents.
Allows you to aggregate data by key, enabling you to perform various aggregation operations on the data, such as counting, summing, and averaging.
Aggregating data by multiple fields allows you to slice and dice the data in more complex ways.

```json
// Count devices by type
{
    $group: {
        _id: "$type",
        count: { $sum: 1 }
    }
}

// Average sensor value
{
    $group: {
        _id: "$deviceId",
        avgValue: { $avg: "$value" }
    }
}

// Group by multiple fields
{ $group: { _id: { type: "$type", room: "$location" } } }
```

#### \$lookup
Retrieves related documents.

#### \$sort
Order the results.
Can specify the sort order as ascending or descending.
Can sort by multiple fields to control the order of the results.

```json
{ $sort: { avgValue: -1 } }
```

#### \$limit
Restrict the number of output documents.

```json
{ $limit: 5 }
```

### Full Pipeline example

**Count active devices per room**

```json
db.devices.aggregate([
    { $match: { status: "active" } },
    { $group: { _id: "$location", count: { $sum: 1 } } },
    { $sort: { count: -1 } }
]);
```

**Average reading per Device**

```json
db.devices.aggregate([
    { $unwind: "$readings" },
    { $group: { 
        _id: "$deviceId",
        avgValue: { $avg: "$readings.value" }
    }},
]);
```

**Daily temperature averages**

```json
db.devices.aggregate([
    { $unwind: "$readings" },
    { 
        $group: { 
            _id: {
                device: "$deviceId",
                day: { $dateToString: { format: "%Y-%m-%d", date: "$readings.timestamp" } }
            },
            avgTemp: { $avg: "$readings.value" }
        }
    },
    { $sort: { "_id.day": 1 } }
]);
```