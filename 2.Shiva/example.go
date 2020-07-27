/**
 * Accepted
 * 46 ms 	16800 KB
 * 2020-06-30
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
	var n, current, max, i int64
	fmt.Scanln(&n)

	var line string
	scanner := bufio.NewScanner(os.Stdin)

	buf := make([]byte, 0, 64*1024)
	scanner.Buffer(buf, 2048*1024)

	if scanner.Scan() {
		line = scanner.Text()
	}

	strList := strings.Split(line, " ")
	list := make([]int, n)

	for i = 0; i < n; i++ {
		list[i], _ = strconv.Atoi(strList[i])
	}

	current = 1
	max = 1
	for i = 1; i < n; i++ {
		if list[i] >= list[i-1] {
			current++
		} else {
			current = 1
		}

		if current > max {
			max = current
		}
	}

	fmt.Println(max)
}
