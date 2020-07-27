/**
 * Accepted
 * 31 ms 	10700 KB
 * 2020-07-08
 */
package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {
	var n int
	fmt.Scanln(&n)

	var line string
	scanner := bufio.NewScanner(os.Stdin)
	if scanner.Scan() {
		line = scanner.Text()
	}

	strList := strings.Split(line, " ")
	list := make([]int, n)

	for i := 0; i < n; i++ {
		list[i], _ = strconv.Atoi(strList[i])
	}

	sereja := 0
	dima := 0
	i := 0
	j := len(list) - 1
	for {
		if list[i] >= list[j] {
			sereja += list[i]
			i++
		} else {
			sereja += list[j]
			j--
		}

		if i > j {
			break
		}

		if list[i] >= list[j] {
			dima += list[i]
			i++
		} else {
			dima += list[j]
			j--
		}

		if i > j {
			break
		}
	}

	fmt.Printf("%d %d\n", sereja, dima)
}
