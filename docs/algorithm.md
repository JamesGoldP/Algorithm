Algorithm
----

## Basic Concept
一个问题可以有多种算法，每种算法不同的效率

## Five feature
- 有穷性
- 确切性
- 输入项
- 输出项
- 可行性

## Time  Complexity(时间复杂度)

### Description

执行算法所需要的计算工作量;一般来说，计算机算法是问题规模n的函数f(n),算法的time complexity也因此记做

T(n) = O(f(n)),问题的规则n越大，算法执行的时间的增长率与f(n)的增长率正相关，称作渐进时间复杂度(Asymptotic Time Complexity)，简称Time  Complexity

###  计算公式

1. 得出算法的计算次数公式

2. 用常数1才取代所有时间中的所有加法常数

3. 在修改后的运行次数函数中，只保留最高阶项

4. 如果最高阶存在且不是1，则去除与这个项相乘的常数

O(n^2),O(1),O(n)
### e.g.
常数阶：O(1)
线性阶:   O(n)
平(立)方阶: O(n^2)/O(n^3)
特殊平方阶:O(n^2+n+1)->O(n^2)
对数阶:O(log2n)
指数阶:O(2^n)
### 效率(从高到低)
O(1)>O(log2n)>O(n)>O(nlog2n)>O(n^2)>O(n^3)>O(2^n)>O(n!)>O(n^n)

### 时间复杂度其他概念
最坏情况：最坏情况时的运行时间，一种保证，如果没有特别说明，说的时间复杂度即为最坏情况的时间复杂度
平均情况：期望的运行时间


##  Space Complexity(空间复杂度)

### Description

算法需要消耗的内存空间，记作S(n)=O(f(n))

包括**程序代码所占用的空间**，**输入数据所占用的空间**和**辅助变量所占用的空间**这三个方面。

计算和表示方法与时间复杂度类似，一般用复杂度的渐近性来表示。

### 计算方式

有时用空间换去时间

冒泡排序的元素交换，空间复杂度O(1)



## 冒泡排序

###  Description

两两相邻的书进行比较，如果反序就交换，否则不交换

### 时间复杂度

最坏(O(n^2)),平均(O(n^2))

### 空间复杂度

O(1)	

