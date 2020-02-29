// C++ implementation of linear search
#include <bits/stdc++.h>
using namespace std;

// Linearly search x in arr[].
// if x is present then return the index,
// otherwise return -1
int search(int arr[], int n, int x) {
	int i;
//	cout << n;
	for (i = 0; i < n; i++) {
//		cout << arr[i] << " & " << x << endl;
//		cout << (arr[i] == x) << endl;
		if (arr[i] == x) {
			return i;
		}
	}
	return -1;
} 

// Driver code
int main() {
	int arr[] = {1, 10, 30, 35};
	int x = 30;
	int n = sizeof(arr)/sizeof(arr[0]);
	cout << x << " is present at index " << search(arr, n, x);
	
	getchar();
	return 0;
} 
