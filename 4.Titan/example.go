/**
 * Accepted
 * 46 ms 	10400 KB
 * 2020-06-30
 */
package main

import (
	"fmt"
	"math"
	"strconv"
)

func Sum(num int64) int64 {
	var sum int64
	sum = 0
	for num > 0 {
		sum += num % 10
		num /= 10
	}

	return sum
}

func main() {
	var n int64

	fmt.Scanln(&n)

	str := strconv.FormatInt(n/2, 10)
	digits := len(str)
	pow10 := int64(math.Pow10(digits - 1))
	a := int64(str[0]-48) * pow10
	if digits > 1 {
		a += pow10 - 1
	}

	fmt.Println(Sum(a) + Sum(n-a))
}
