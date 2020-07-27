/**
 * Accepted
 * 78 ms 	5200 KB
 * 2020-07-02
 */
package main

import (
	"fmt"
	"math"
	"sort"
)

type Point struct {
	x    int
	y    int
	dist float64
}

type PointList []Point

func (p PointList) Swap(i, j int)      { p[i], p[j] = p[j], p[i] }
func (p PointList) Len() int           { return len(p) }
func (p PointList) Less(i, j int) bool { return p[i].dist < p[j].dist }

func main() {

	var t, n int
	fmt.Scanln(&t)

	for i := 0; i < t; i++ {
		fmt.Scanln(&n)

		var plist PointList
		for j := 0; j < n; j++ {
			var x, y int
			fmt.Scanf("%d %d\n", &x, &y)

			point := Point{x: x, y: y, dist: math.Sqrt(float64(x*x + y*y))}
			plist = append(plist, point)
		}

		sort.Sort(plist)

		steps := ""
		currX := 0
		currY := 0

		for j := 0; j < n; j++ {
			p := plist[j]

			if p.x >= currX {
				for k := 0; k < p.x-currX; k++ {
					steps += "R"
				}
				currX = p.x
			} else {
				if currX != 0 {
					steps = ""
					break
				}
			}

			if p.y >= currY {
				for k := 0; k < p.y-currY; k++ {
					steps += "U"
				}
				currY = p.y
			} else {
				if currY != 0 {
					steps = ""
					break
				}
			}
		}

		if steps == "" {
			fmt.Println("NO")
		} else {
			fmt.Println("YES")
			fmt.Println(steps)
		}
	}
}
