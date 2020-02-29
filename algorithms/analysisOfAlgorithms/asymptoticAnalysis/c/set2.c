// C implementation of the linear search
#include <stdio.h>

// Linearly search x in arr[].
// if x is present then return the index,
// otherwise return -1;

int search(int arr[], int n, int x) {
	int i;
	for (i = 0; i < n; i++) {
		if (arr[i] == x) {
			return i;
		}
	}
	return -1;
}

/* Driver program to test above function */
int main() {
	int arr[] = {1, 10, 30, 45};
	int x = 30;
	int n = sizeof(arr)/sizeof(arr[0]);
	printf("%d is present at index %d", x, search(arr, n, x));
	
	getchar();
	return 0;
}
