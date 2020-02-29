# Python 3 implementation of the linear search

# Linearly search x in arr[].
# if x is present then return the index,
# otherwise return -1


def search(array, length, element):
    i = 0
    for i in range(i, length):
        if array[i] == element:
            return i
    return -1


# Driver code
arr = [1, 10, 30, 15]
x = 30
n = len(arr)
print(x, " is presented at index ", search(arr, n, x))
