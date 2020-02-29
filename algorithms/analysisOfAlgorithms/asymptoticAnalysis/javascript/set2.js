function search(arr, length, number) {
    for (let i = 0; i < length; i++) {
        if (arr[i] === number) return i;
    }
    return -1;
}

let arr = [1, 10, 30, 15];
let number = 30;
let length = arr.length;
console.log(`${number} is present at index ${search(arr, length, number)}`);