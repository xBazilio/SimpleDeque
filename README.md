# SimpleDeque
Simple double ended queue implementation with PHP

This is the light and simple implementation of the double ended queue.

PHP has it's own deque: [Ds\Deque](https://www.php.net/manual/en/class.ds-deque.php). But as I discovered it has too many functions which make it too heavy in some workloads.

Consider [Sliding Window Maximum](https://leetcode.com/problems/sliding-window-maximum/) problem from LeetCode. Using PHPs `Ds\Deque` I couldn't submit my solution because of "Time Limit Exceeded" error. With this `SimpleDeque` class my solution was accepted.
