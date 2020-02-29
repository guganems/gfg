// C# implementation of the linear search
using System;

public class GFG 
{
    // Linearly search x in arr[].
    // if x is present then return the index,
    // otherwise return -1
    static int search(int []arr, int n, int x)
    {
        int i;
        for (i = 0; i < n; i++)
        {
            if (arr[i] == x)
            {
                return i;
            }
        }
        return -1;
    }

    /* Driver program to test function above. */
    public static void Main()
    {
        int[] arr = { 1, 10, 30, 15 };
        int x = 30;
        int n = arr.Length;
        Console.WriteLine(x + " Is presented at index " + search(arr, n, x));
    }
}
