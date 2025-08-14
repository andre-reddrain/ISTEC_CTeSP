const arr = [10, 40, 20, 50, 80, 30];

const output = arr.reduce((collector, current) => {
    collector = collector + current;
    return collector;
}, 0)



const res = arr.filter((val) => val >= 50);
console.log(res);   // [50, 80]

// const res = arr.map((val) => val + 10);
// console.log(res);   // [20, 50, 30, 60, 90, 40]





