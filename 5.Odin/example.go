/**
 * Accepted
 * 46 ms 	400 KB
 * 2020-07-01
 */
package main

import (
	"bufio"
	"fmt"
	"os"
)

func main() {
	var n, k int
	fmt.Scanf("%d %d\n", &n, &k)

	var str, keys string

	reader := bufio.NewReader(os.Stdin)

	str, _ = reader.ReadString('\n')
	keys, _ = reader.ReadString('\n')

	keyMap := make(map[int]bool)
	for i := 0; i < len(keys); i++ {
		key := int(keys[i])
		if key >= 97 && key <= 122 {
			keyMap[key] = true
		}
	}

	var substringLen, result int64
	substringLen = 0
	result = 0
	for i := 0; i < n; i++ {
		if keyMap[int(str[i])] {
			substringLen++
		} else {
			result += (substringLen * (substringLen + 1)) / 2
			substringLen = 0
		}
	}

	result += (substringLen * (substringLen + 1)) / 2
	fmt.Println(result)
}
