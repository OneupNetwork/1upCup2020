/**
 * Accepted
 * 670 ms 	800 KB
 * 2020-07-03
 */
package main

import "fmt"

func main() {
	var n, k int
	fmt.Scanf("%d %d\n", &n, &k)

	var str string
	fmt.Scanln(&str)

	nums := []rune(str)

	if n == 1 && k >= 1 {
		fmt.Println("0")
	} else {
		i := 0
		for k > 0 && i < n {
			if i == 0 && nums[i] != '1' {
				nums[i] = '1'
				k--
			}

			if i > 0 && nums[i] != '0' {
				nums[i] = '0'
				k--
			}

			i++
		}

		fmt.Println(string(nums))
	}
}
