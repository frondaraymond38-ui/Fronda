<!DOCTYPE html>
<html>
<head>
<title>Pseudocode</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
  <h1 class="mb-3">10 Pseudocode Examples</h1>
  <div class="list-group">
    <pre class="list-group-item">Linear Search
for i = 0 to n-1
  if arr[i] == target
    return i</pre>
    <pre class="list-group-item">Binary Search
low = 0
high = n-1
while low <= high
  mid = (low + high) / 2
  if arr[mid] == target return mid
  else if arr[mid] < target low = mid + 1
  else high = mid - 1</pre>
    <pre class="list-group-item">Bubble Sort
repeat
  swapped = false
  for i = 0 to n-2
    if arr[i] > arr[i+1]
      swap(arr[i], arr[i+1])
      swapped = true
until not swapped</pre>
    <pre class="list-group-item">Selection Sort
for i = 0 to n-1
  minIndex = i
  for j = i+1 to n-1
    if arr[j] < arr[minIndex]
      minIndex = j
  swap(arr[i], arr[minIndex])</pre>
    <pre class="list-group-item">Insertion Sort
for i = 1 to n-1
  key = arr[i]
  j = i-1
  while j >= 0 and arr[j] > key
    arr[j+1] = arr[j]
    j = j - 1
  arr[j+1] = key</pre>
    <pre class="list-group-item">Merge Sort
if size <= 1 return
split array into left and right
mergeSort(left)
mergeSort(right)
merge(left, right)</pre>
    <pre class="list-group-item">Quick Sort
if low < high
  pivot = partition(arr, low, high)
  quicksort(arr, low, pivot-1)
  quicksort(arr, pivot+1, high)</pre>
    <pre class="list-group-item">BFS
enqueue(start)
while queue not empty
  node = dequeue()
  visit(node)
  enqueue children</pre>
    <pre class="list-group-item">DFS
visit(node)
for each child of node
  DFS(child)</pre>
    <pre class="list-group-item">Dijkstra
set all distances = INF
distance[source] = 0
while unvisited nodes exist
  pick node with smallest distance
  update neighbors distances</pre>
  </div>
</div>
</body>
</html>
