# Getting started

**Array Master** is a simple, elegant PHP library to make custom data. It'll make your life easier by giving custom data without complexity on your data.

###### Install Manually
1. Download Array Master
2. Unzip it and copy the directory into your PHP project directory.

Let's see a quick example:
```
$your_vendor_file_location ="vendor/autoload.php"; 
require "$your_vendor_file_location";

// you have to user make_data function for all example

$make_data = make_data([
    ['account_id' => 'account-x10', 'product' => 'Chair'],
    ['account_id' => 'account-x10', 'product' => 'Bookcase'],
    ['account_id' => 'account-x11', 'product' => 'Desk'],
]);

$grouped = $make_data->groupBy('account_id');

echo '<pre>';
print_r($grouped->toArray());
echo '</pre>';
exit;
```
OUTPUT
```
Array
(
    [account-x10] => Array
        (
            [0] => Array
                (
                    [account_id] => account-x10
                    [product] => Chair
                )

            [1] => Array
                (
                    [account_id] => account-x10
                    [product] => Bookcase
                )

        )

    [account-x11] => Array
        (
            [0] => Array
                (
                    [account_id] => account-x11
                    [product] => Desk
                )

        )

)

```

#### Available Methods

* [all](#all)
* [average](#average)
* [avg](#avg)
* [chunk](#chunk)
* [concat](#concat)
* [countBy](#countBy)
* [diff](#diff)
* [diffAssoc](#diffAssoc)
* [diffKeys](#diffKeys)
* [every](#every)
* [except](#except)
* [filter](#filter)
* [first](#first)
* [firstWhere](#firstWhere)
* [flatMap](#flatMap)
* [flatten](#flatten)
* [flip](#flip)
* [forget](#forget)
* [get](#get)
* [groupBy](#groupBy)
* [has](#has)
* [implode](#implode)
* [intersect](#intersect)
* [intersectByKeys](#intersectByKeys)
* [isEmpty](#isEmpty)
* [isNotEmpty](#isNotEmpty)
* [join](#join)
* [keys](#keys)
* [last](#last)
* [make](#make)
* [make](#make)
* [mapInto](#mapInto)
* [max](#max)
* [median](#median)
* [merge](#merge)
* [min](#min)
* [mode](#mode)
* [nth](#nth)
* [only](#only)
* [except_multiple](#except_multiple)
* [pop](#pop)
* [prepend](#prepend)
* [pull](#pull)
* [push](#push)
* [put](#put)
* [random](#random)
* [reduce](#reduce)
* [reject](#reject)
* [reverse](#reverse)
* [search](#search)
* [shift](#shift)
* [shuffle](#shuffle)
* [slice](#slice)
* [some](#some)
* [sort](#sort)
* [sortBy](#sortBy)
* [sortByDesc](#sortByDesc)
* [sortKeysDesc](#sortKeysDesc)
* [splice](#splice)
* [split](#split)
* [sum](#sum)
* [take](#take)
* [tap](#tap)
* [times](#times)
* [toArray](#toArray)
* [toJson](#toJson)
* [transform](#transform)
* [union](#union)
* [unique](#unique)
* [uniqueStrict](#uniqueStrict)
* [unless](#unless)
* [unlessEmpty](#unlessEmpty)
* [unlessNotEmpty](#unlessNotEmpty)
* [unwrap](#unwrap)
* [values](#values)
* [when](#when)
* [whenEmpty](#whenEmpty)
* [whenNotEmpty](#whenNotEmpty)
* [where](#where)
* [whereStrict](#whereStrict)
* [whereBetween](#whereBetween)
* [whereIn](#whereIn)
* [whereInStrict](#whereInStrict)
* [whereInstanceOf](#whereInstanceOf)
* [whereNotBetween](#whereNotBetween)
* [whereNotIn](#whereNotIn)
* [whereNotInStrict](#whereNotInStrict)
* [wrap](#wrap)
* [zip](#zip)

### `all()`

The all method returns the underlying array represented by the data array:
```$xslt
make_data([1, 2, 3])->all();

```
Output
```$xslt
[1, 2, 3]
```
### `average()`
Alias for the avg method.

avg()

The avg method returns the average value of a given key:
```$xslt
$average = make_data([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->avg('foo');
```
Output
```$xslt
20
```
```$xslt
$average = make_data([1, 1, 2, 4])->avg();
```
Output
```$xslt
2
```
### `chunk()`
The chunk method breaks  into multiple
```$xslt
$make_data = make_data([1, 2, 3, 4, 5, 6, 7]);
$chunks = $make_data->chunk(4);
$chunks->toArray();
```
Output
```$xslt
 [[1, 2, 3, 4], [5, 6, 7]]
```

### `collapse()`
The collapse method collapses a data array of arrays into a single, flat data array:
```$xslt
$make_data = make_data([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
$collapsed = $make_data->collapse();
$collapsed->all();
```
Output
```$xslt
[1, 2, 3, 4, 5, 6, 7, 8, 9]
```
### `combine()`
The combine method combines the values of the data array, as keys, with the values of another array or data array:
```$xslt
$make_data = make_data(['name', 'age']);
$combined = $make_data->combine(['George', 29]);
$combined->all();
```
Output
```$xslt
 ['name' => 'George', 'age' => 29]
```
### `concat()`
The concat method appends the given array or data array values onto the end of the data array:
```$xslt
$make_data = make_data(['John Doe']);
$concatenated = $make_data->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);
$concatenated->all();
```
Output
```$xslt
 ['John Doe', 'Jane Doe', 'Johnny Doe']
```
### `contains()`
The contains method determines whether the make_data contains a given item:
```$xslt
$make_data = make_data(['name' => 'Desk', 'price' => 100]);
$make_data->contains('Desk');
$make_data->contains('New York');

```
Output
```$xslt
 true 
 false
```
### `count()`
The count method returns the total number of items in the data array:
```$xslt
$make_data = make_data([1, 2, 3, 4]);
$make_data->count();
```
Output
```$xslt
 4
```
### `countBy()`
The countBy method counts the occurences of values in the make_data. By default, the method counts the occurrences of every element:
```$xslt
$make_data = make_data([1, 2, 2, 2, 3]);
$counted = $make_data->countBy();
$counted->all();
```
Output
```$xslt
 [1 => 1, 2 => 3, 3 => 1]
```
### `diff()`
The diff method compares the data array against another data array or a plain PHP array based on its values. This method will return the values in the original data that are not present in the given data array:
```$xslt
$make_data = make_data([1, 2, 3, 4, 5]);
$diff = $make_data->diff([2, 4, 6, 8]);
$diff->all();

```
Output
```$xslt
 [1, 3, 5]
```
### `diffAssoc()`
The diffAssoc method compares the data array against another data array or a plain PHP array based on its keys and values. This method will return the key / value pairs in the original data array that are not present in the given data array:
```$xslt
$make_data = make_data([
    'color' => 'orange',
    'type' => 'fruit',
    'remain' => 6
]);

$diff = $make_data->diffAssoc([
    'color' => 'yellow',
    'type' => 'fruit',
    'remain' => 3,
    'used' => 6
]);

$diff->all();
```
Output
```$xslt
 ['color' => 'orange', 'remain' => 6]
```
### `diffKeys()`
The diffKeys method compares the data array against another data array or a plain PHP array based on its keys. This method will return the key / value pairs in the original data array that are not present in the given data array
```$xslt
$diff = make_data([
    'one' => 10,
    'two' => 20,
    'three' => 30,
    'four' => 40,
    'five' => 50,
]);

$diff = $diff->diffKeys([
    'two' => 2,
    'four' => 4,
    'six' => 6,
    'eight' => 8,
]);
$diff->all();
```
Output
```$xslt
 ['one' => 10, 'three' => 30, 'five' => 50]
```
### `except()`
The except method returns all items in the data array except for those with the specified keys:
```$xslt
$make_data = make_data(['product_id' => 1, 'price' => 100, 'discount' => false]);
$filtered = $make_data->except(['price', 'discount']);
$filtered->all();
```
Output
```$xslt
 ['product_id' => 1]
```
### `except_multiple()`
The except_multiple method returns all items in the data array except for those with the specified keys:
```$xslt
$make_data = make_data([['product_id' => 1, 'price' => 100, 'discount' => false],['product_id' => 2, 'price' => 500, 'discount' => true]]);
$filtered = $make_data->except_multiple(['price', 'discount']);
$filtered->all();
```
Output
```$xslt
 Array
 (
     [0] => Array
         (
             [product_id] => 1
         )
 
     [1] => Array
         (
             [product_id] => 2
         )
 
 )
```
### `filter()`
The filter method filters the data array using the given callback, keeping only those items that pass a given truth test:
```$xslt
$make_data = make_data([1, 2, 3, 4]);

$filtered = $make_data->filter(function ($value, $key) {
    return $value > 2;
});
$filtered->all();
```
Output
```$xslt
 [3, 4]
```
### `first()`
The first method returns the first element in the data array that passes a given truth test:
```$xslt
make_data([1, 2, 3, 4])->first(function ($value, $key) {
    return $value > 2;
});
```
Output
```$xslt
 3
```
### `firstWhere()`
The firstWhere method returns the first element in the data array with the given key / value pair:
```$xslt
$make_data = make_data([
    ['name' => 'Regena', 'age' => null],
    ['name' => 'Linda', 'age' => 14],
    ['name' => 'Diego', 'age' => 23],
    ['name' => 'Linda', 'age' => 84],
]);
$make_data->firstWhere('name', 'Linda');
```
Output
```$xslt
 ['name' => 'Linda', 'age' => 14]
```
### `flatMap()`
The flatMap method iterates through the data array and passes each value to the given callback. The callback is free to modify the item and return it, thus forming a new data array of modified items. Then, the array is flattened by a level:
```$xslt
$make_data = make_data([
    ['name' => 'Sally'],
    ['school' => 'Arkansas'],
    ['age' => 28]
]);

$flattened = $make_data->flatMap(function ($values) {
    return array_map('strtoupper', $values);
});
$flattened->all();
```
Output
```$xslt
 ['name' => 'SALLY', 'school' => 'ARKANSAS', 'age' => '28'];
```
### `flatten()`
The flatten method flattens a multi-dimensional data array into a single dimension:
```$xslt
$make_data = make_data(['name' => 'taylor', 'languages' => ['php', 'javascript']]);
$flattened = $make_data->flatten();
$flattened->all();
```
Output
```$xslt
 ['jony', 'php', 'javascript'];
```
### `flip()`
The flip method swaps the data arrays's keys with their corresponding values:
```$xslt
$make_data = make_data(['name' => 'Jony', 'library' => 'array_master']);
$flipped = $make_data->flip();
$flipped->all();
```
Output
```$xslt
 ['jony' => 'name', 'array_master' => 'library']
```
### `forget()`
The forget method removes an item from the data array by its key:
```$xslt
$make_data = make_data(['name' => 'Jony', 'library' => 'array_master']);
$make_data->forget('name');
$make_data->all();


```
Output
```$xslt
  ['library' => 'array_master']
```
### `get()`
The get method returns the item at a given key. If the key does not exist, null is returned:
```$xslt
$make_data = make_data(['name' => 'Jony', 'library' => 'array_master']);
$value = $make_data->get('name');
```
Output
```$xslt
 Jony
```
### `groupBy()`
The groupBy method groups the data arrays's items by a given key:
```$xslt
$make_data = make_data([
    ['account_id' => 'account-x10', 'product' => 'Chair'],
    ['account_id' => 'account-x10', 'product' => 'Bookcase'],
    ['account_id' => 'account-x11', 'product' => 'Desk'],
]);
$grouped = $make_data->groupBy('account_id');
$grouped->toArray();

```
Output
```$xslt
  [
         'account-x10' => [
             ['account_id' => 'account-x10', 'product' => 'Chair'],
             ['account_id' => 'account-x10', 'product' => 'Bookcase'],
         ],
         'account-x11' => [
             ['account_id' => 'account-x11', 'product' => 'Desk'],
         ],
     ]
```
### `has()`
The has method determines if a given key exists in the data array:
```$xslt
$make_data = make_data(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]);
$make_data->has('product');

```
Output
```$xslt
 true
```
### `implode()`
The implode method joins the items in a dara array. Its arguments depend on the type of items in the dara array. If the data array contains arrays or objects, you should pass the key of the attributes you wish to join, and the "glue" string you wish to place between the values:
```$xslt
$make_data = make_data([
    ['account_id' => 1, 'product' => 'Desk'],
    ['account_id' => 2, 'product' => 'Chair'],
]);
$make_data->implode('product', ', ');

```
Output
```$xslt
Desk, Chair
 
```
### `intersect()`
The intersect method removes any values from the original data array that are not present in the given array or dara array. The resulting data array will preserve the original dara array's keys:
```$xslt
$make_data = make_data(['Desk', 'Sofa', 'Chair']);
$intersect = $make_data->intersect(['Desk', 'Chair', 'Bookcase']);
$intersect->all();

```
Output
```$xslt
 [0 => 'Desk', 2 => 'Chair']
```
### `intersectByKeys()`
The intersectByKeys method removes any keys from the original data array that are not present in the given array or dara array:
```$xslt
$make_data = make_data([
    'serial' => 'UX301', 'type' => 'screen', 'year' => 2009
]);
$intersect = $make_data->intersectByKeys([
    'reference' => 'UX404', 'type' => 'tab', 'year' => 2011
]);

$intersect->all();
```
Output
```$xslt
 ['type' => 'screen', 'year' => 2009]
```
### `isEmpty()`
The isEmpty method returns true if the data array is empty; otherwise, false is returned:
```$xslt
make_data([])->isEmpty();
```
Output
```$xslt
 true
```
### `isNotEmpty()`
The isNotEmpty method returns true if the data array is not empty; otherwise, false is returned:
```$xslt
make_data([])->isNotEmpty();
```
Output
```$xslt
 false
```

### `keyBy()`
The keyBy method keys the data array by the given key. If multiple items have the same key, only the last one will appear in the new dara array:
```$xslt
$make_data = make_data([
    ['product_id' => 'prod-100', 'name' => 'Desk'],
    ['product_id' => 'prod-200', 'name' => 'Chair'],
]);
$keyed = $make_data->keyBy('product_id');
$keyed->all();
```
Output
```$xslt
 [
         'prod-100' => ['product_id' => 'prod-100', 'name' => 'Desk'],
         'prod-200' => ['product_id' => 'prod-200', 'name' => 'Chair'],
     ]
```
### `keys()`
The keys method returns all of the data array's keys:
```$xslt
$make_data = make_data([
    'prod-100' => ['product_id' => 'prod-100', 'name' => 'Desk'],
    'prod-200' => ['product_id' => 'prod-200', 'name' => 'Chair'],
]);
$keys = $make_data->keys();
```
Output
```$xslt
 ['prod-100', 'prod-200']
```
### `last()`
The last method returns the last element in the data array that passes a given truth test:
```$xslt
make_data([1, 2, 3, 4])->last();

```
Output
```$xslt
4
```
### `map()`
The map method iterates through the data array and passes each value to the given callback. The callback is free to modify the item and return it, thus forming a new data array of modified items:
```$xslt
$make_data = make_data([1, 2, 3, 4, 5]);

$multiplied = $make_data->map(function ($item, $key) {
    return $item * 2;
});
$multiplied->all();
```
Output
```$xslt
  [2, 4, 6, 8, 10]
```
### `mapWithKeys()`

```$xslt
$make_data = make_data([
    [
        'name' => 'John',
        'department' => 'Sales',
        'email' => 'john@example.com'
    ],
    [
        'name' => 'Jane',
        'department' => 'Marketing',
        'email' => 'jane@example.com'
    ]
]);

$keyed = $make_data->mapWithKeys(function ($item) {
    return [$item['email'] => $item['name']];
});

$keyed->all();
```
Output
```$xslt
 [
         'john@example.com' => 'John',
         'jane@example.com' => 'Jane',
     ]
```
### `max()`
The max method returns the maximum value of a given key:

```$xslt
$max = make_data([['foo' => 10], ['foo' => 20]])->max('foo');
$max = make_data([['foo' => 10], ['foo' => 30]])->max('foo');

```
Output
```$xslt
 20
 30
```
### `median()`
The median method returns the median value of a given key:
```$xslt
$median = make_data([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->median('foo');

```
Output
```$xslt
 15
```
### `merge()`
```$xslt
$make_data = make_data(['product_id' => 1, 'price' => 100]);
$merged = $make_data->merge(['price' => 200, 'discount' => false]);
$merged->all();
```
Output
```$xslt
 ['product_id' => 1, 'price' => 200, 'discount' => false]
```
### `min()`
The min method returns the minimum value of a given key:
```$xslt
$min = make_data([['foo' => 10], ['foo' => 20]])->min('foo');
$min = make_data([1, 2, 3, 4, 5])->min();

```
Output
```$xslt
 10
 1
```
### `mode()`
The mode method returns the mode value of a given key:
```$xslt
$mode = make_data([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->mode('foo');
$mode = make_data([1, 1, 2, 4])->mode();
```
Output
```$xslt
 [10]
 [1]
```
### `only()`
The only method returns the items in the data array with the specified keys:
```$xslt
$make_data = make_data(['product_id' => 1, 'name' => 'Desk', 'price' => 100, 'discount' => false]);

$filtered = $make_data->only(['product_id', 'name']);

$filtered->all();
```
Output
```$xslt
 ['product_id' => 1, 'name' => 'Desk']
```
### `pad()`
```$xslt
$make_data = make_data(['A', 'B', 'C']);

$filtered = $make_data->pad(5, 0);

$filtered->all();

```
Output
```$xslt
 ['A', 'B', 'C', 0, 0]
```
### `partition()`
The partition method may be combined with the list PHP function to separate elements that pass a given truth test from those that do not:
```$xslt
$make_data = make_data[1, 2, 3, 4, 5, 6]);

list($underThree, $equalOrAboveThree) = $make_data->partition(function ($i) {
    return $i < 3;
});

$underThree->all();
$equalOrAboveThree->all();

```
Output
```$xslt
 [1, 2]
 [3, 4, 5, 6]
 
```
### `pipe()`
The pipe method passes the data array to the given callback and returns the result:
```$xslt
$make_data = make_data[1, 2, 3]);

$piped = $make_data->pipe(function ($make_data) {
    return $make_data->sum();
});
```
Output
```$xslt
 6
```
### `pluck()`
The pluck method retrieves all of the values for a given key:
```$xslt
$make_data = make_data[
    ['product_id' => 'prod-100', 'name' => 'Desk'],
    ['product_id' => 'prod-200', 'name' => 'Chair'],
]);

$plucked = $make_data->pluck('name');

$plucked->all();
```
Output
```$xslt
 ['Desk', 'Chair']
```
### `pop()`
The pop method removes and returns the last item from the data array:
```$xslt
$make_data = make_data[1, 2, 3, 4, 5]);
$make_data->pop();
$make_data->all();
```
Output
```$xslt
 5
 [1, 2, 3, 4]
```
### `prepend()`
The prepend method adds an item to the beginning of the data array:

```$xslt
$make_data = make_data[1, 2, 3, 4, 5]);

$make_data->prepend(0);

$make_data->all();

```
Output
```$xslt
 [0, 1, 2, 3, 4, 5]
```
### `pull()`
The pull method removes and returns an item from the data array by its key:

```$xslt
$make_data = make_data['product_id' => 'prod-100', 'name' => 'Desk']);
$make_data->pull('name');
$make_data->all();


```
Output
```$xslt
 'Desk'
 ['product_id' => 'prod-100']
```
### `push()`
The push method appends an item to the end of the data array:
```$xslt
$make_data = make_data[1, 2, 3, 4]);
$make_data->push(5);
$make_data->all();
```
Output
```$xslt
 [1, 2, 3, 4, 5]
```
### `put()`
The put method sets the given key and value in the data array:
```$xslt
$make_data = make_data['product_id' => 1, 'name' => 'Desk']);
$make_data->put('price', 100);
$make_data->all();
```
Output
```$xslt
 ['product_id' => 1, 'name' => 'Desk', 'price' => 100]
```
### `random()`
The random method returns a random item from the data array:
```$xslt
$make_data = make_data[1, 2, 3, 4, 5]);
$make_data->random();
```
Output
```$xslt
 4 - (retrieved randomly)
```
### `reduce()`
The reduce method reduces the data array to a single value, passing the result of each iteration into the subsequent iteration:
```$xslt
$make_data = make_data[1, 2, 3]);

$total = $make_data->reduce(function ($carry, $item) {
    return $carry + $item;
});

```
Output
```$xslt
 6
```
### `reject()`
The reject method filters the data array using the given callback. The callback should return true if the item should be removed from the resulting data array:
```$xslt
$make_data = make_data[1, 2, 3, 4]);

$filtered = $make_data->reject(function ($value, $key) {
    return $value > 2;
});

$filtered->all();
```
Output
```$xslt
 [1, 2]
```
### `reverse()`
The reverse method reverses the order of the data array's items, preserving the original keys:

```$xslt
$make_data = make_data['a', 'b', 'c', 'd', 'e']);

$reversed = $make_data->reverse();

$reversed->all();

```
Output
```$xslt
 [
         4 => 'e',
         3 => 'd',
         2 => 'c',
         1 => 'b',
         0 => 'a',
     ]
```
### `search()`
The search method searches the data array for the given value and returns its key if found. If the item is not found, false is returned.
```$xslt
$make_data = make_data[2, 4, 6, 8]);

$make_data->search(4);
```
Output
```$xslt
 1
```
### `shift()`
The shift method removes and returns the first item from the data array:
```$xslt
$make_data = make_data[1, 2, 3, 4, 5]);
$make_data->shift();
$make_data->all();
```
Output
```$xslt
1
 [2, 3, 4, 5]
```
### `shuffle()`
The shuffle method randomly shuffles the items in the data array:
```$xslt
$make_data = make_data[1, 2, 3, 4, 5]);

$shuffled = $make_data->shuffle();

$shuffled->all();

```
Output
```$xslt
 [3, 2, 5, 1, 4] - (generated randomly)
```
### `slice()`
The slice method returns a slice of the data array starting at the given index:

```$xslt
$make_data = make_data[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

$slice = $make_data->slice(4);

$slice->all();
```
Output
```$xslt
 [5, 6, 7, 8, 9, 10]
```
### `sort()`
The sort method sorts the data array. The sorted data array keeps the original array keys, so in this example we'll use the values method to reset the keys to consecutively numbered indexes:
```$xslt
$make_data = make_data[5, 3, 1, 2, 4]);

$sorted = $make_data->sort();

$sorted->values()->all();
```
Output
```$xslt
 [1, 2, 3, 4, 5]
```
### `sortBy()`
```$xslt
$make_data = make_data[
    ['name' => 'Desk', 'price' => 200],
    ['name' => 'Chair', 'price' => 100],
    ['name' => 'Bookcase', 'price' => 150],
]);

$sorted = $make_data->sortBy('price');

$sorted->values()->all();
```
Output
```$xslt
 [
         ['name' => 'Chair', 'price' => 100],
         ['name' => 'Bookcase', 'price' => 150],
         ['name' => 'Desk', 'price' => 200],
     ]
```
### `sortKeys()`
The sortKeys method sorts the data array by the keys of the underlying associative array:
```$xslt
$make_data = make_data[
    'id' => 22345,
    'first' => 'John',
    'last' => 'Doe',
]);

$sorted = $make_data->sortKeys();

$sorted->all();
```
Output
```$xslt
  [
         'first' => 'John',
         'id' => 22345,
         'last' => 'Doe',
     ]
```
### `splice()`
The splice method removes and returns a slice of items starting at the specified index:
```$xslt
$make_data = make_data[1, 2, 3, 4, 5]);

$chunk = $make_data->splice(2);

$chunk->all();
```
Output
```$xslt
 [3, 4, 5]
```
### `split()`
The split method breaks a data array into the given number of groups:

```$xslt
data array = make_data[1, 2, 3, 4, 5]);

$groups = $make_data->split(3);

$groups->toArray();
```
Output
```$xslt
 [[1, 2], [3, 4], [5]]
```
### `sum()`
The sum method returns the sum of all items in the data array:
```$xslt
.............................
make_data[1, 2, 3, 4, 5])->sum();
.............................
$make_data = make_data[
    ['name' => 'JavaScript: The Good Parts', 'pages' => 176],
    ['name' => 'JavaScript: The Definitive Guide', 'pages' => 1096],
]);

$make_data->sum('pages');
.............................

data array = make_data[
    ['name' => 'Chair', 'colors' => ['Black']],
    ['name' => 'Desk', 'colors' => ['Black', 'Mahogany']],
    ['name' => 'Bookcase', 'colors' => ['Red', 'Beige', 'Brown']],
]);

$make_data->sum(function ($product) {
    return count($product['colors']);
});
```
Output
```$xslt
 15
 1272
 6
```
### `take()`
The take method returns a new data array with the specified number of items:
```$xslt
$make_data = make_data[0, 1, 2, 3, 4, 5]);

$chunk = $make_data->take(3);

$chunk->all();
```
Output
```$xslt
 [0, 1, 2]
```
### `tap()`
The tap method passes the data array to the given callback, allowing you to "tap" into the data array at a specific point and do something with the items while not affecting the data array itself:
```$xslt
make_data[2, 4, 3, 1, 5])
    ->sort()
    ->tap(function ($make_data) {
        Log::debug('Values after sorting', $make_data->values()->toArray());
    })
    ->shift();
```
Output
```$xslt
 1
```
### `times()`
The static times method creates a new data array by invoking the callback a given amount of times:
```$xslt
$make_data = Collection::times(10, function ($number) {
    return $number * 9;
});

$make_data->all();
```
Output
```$xslt
 [9, 18, 27, 36, 45, 54, 63, 72, 81, 90]
```
### `toJson()`
The toJson method converts the data array into a JSON serialized string:
```$xslt
$make_data = make_data['name' => 'Desk', 'price' => 200]);

$make_data->toJson();
```
Output
```$xslt
 '{"name":"Desk", "price":200}'
```
### `transform()`
The transform method iterates over the data array and calls the given callback with each item in the data array. The items in the data array will be replaced by the values returned by the callback:
```$xslt
$make_data = make_data[1, 2, 3, 4, 5]);

$make_data->transform(function ($item, $key) {
    return $item * 2;
});

$make_data->all();
```
Output
```$xslt
 [2, 4, 6, 8, 10]
```
### `union()`
union()

The union method adds the given array to the data array. If the given array contains keys that are already in the original data array, the original data array's values will be preferred:
```$xslt
$make_data = make_data[1 => ['a'], 2 => ['b']]);

$union = $make_data->union([3 => ['c'], 1 => ['b']]);

$union->all();

```
Output
```$xslt
 [1 => ['a'], 2 => ['b'], 3 => ['c']]
```
### `unique()`
The only method returns the items in the data array with the specified keys:
```$xslt
data array = make_data[1, 1, 2, 2, 3, 4, 2]);

$unique = $make_data->unique();

$unique->values()->all();

$make_data = make_data[
    ['name' => 'iPhone 6', 'brand' => 'Apple', 'type' => 'phone'],
    ['name' => 'iPhone 5', 'brand' => 'Apple', 'type' => 'phone'],
    ['name' => 'Apple Watch', 'brand' => 'Apple', 'type' => 'watch'],
    ['name' => 'Galaxy S6', 'brand' => 'Samsung', 'type' => 'phone'],
    ['name' => 'Galaxy Gear', 'brand' => 'Samsung', 'type' => 'watch'],
]);

$unique = $make_data->unique('brand');

$unique->values()->all();
```
Output
```$xslt
 [1, 2, 3, 4]
  [
         ['name' => 'iPhone 6', 'brand' => 'Apple', 'type' => 'phone'],
         ['name' => 'Galaxy S6', 'brand' => 'Samsung', 'type' => 'phone'],
     ]
```
### `unless()`
The unless method will execute the given callback unless the first argument given to the method evaluates to true:
```$xslt
$make_data = make_data[1, 2, 3]);

$make_data->unless(true, function ($make_data) {
    return $make_data->push(4);
});

$make_data->unless(false, function ($make_data) {
    return $make_data->push(5);
});

$make_data->all();
```
Output
```$xslt
 [1, 2, 3, 5]
```
### `values()`
The values method returns a new data array with the keys reset to consecutive integers:
```$xslt
$make_data = make_data[
    10 => ['product' => 'Desk', 'price' => 200],
    11 => ['product' => 'Desk', 'price' => 200]
]);

$values = $make_data->values();

$values->all();
```
Output
```$xslt
 [
         0 => ['product' => 'Desk', 'price' => 200],
         1 => ['product' => 'Desk', 'price' => 200],
     ]
```
### `when()`
The when method will execute the given callback when the first argument given to the method evaluates to true:
```$xslt
$make_data = make_data[1, 2, 3]);

$make_data->when(true, function ($make_data) {
    return $make_data->push(4);
});

$make_data->when(false, function ($make_data) {
    return $make_data->push(5);
});

$make_data->all();
```
Output
```$xslt
  [1, 2, 3, 4]
```
### `whenEmpty()`
The whenEmpty method will execute the given callback when the data array is empty:
```$xslt
$make_data = make_data['michael', 'tom']);

$make_data->whenEmpty(function ($make_data) {
    return $make_data->push('adam');
});

$make_data->all();

// ['michael', 'tom']

$make_data = make_data);

$make_data->whenEmpty(function ($make_data) {
    return $make_data->push('adam');
});

$make_data->all();
```
Output
```$xslt
 ['adam']
```
### `whenNotEmpty()`
The whenNotEmpty method will execute the given callback when the data array is not empty:
```$xslt
$make_data = make_data['michael', 'tom']);

$make_data->whenNotEmpty(function ($make_data) {
    return $make_data->push('adam');
});

$make_data->all();
```
Output
```$xslt
 ['michael', 'tom', 'adam']
```
### `where()`
The where method filters the data array by a given key / value pair:
```$xslt
$make_data = make_data[
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
]);

$filtered = $make_data->where('price', 100);

$filtered->all();
```
Output
```$xslt
 [
         ['product' => 'Chair', 'price' => 100],
         ['product' => 'Door', 'price' => 100],
     ]
```
### `whereBetween()`
The whereBetween method filters the data array within a given range:

```$xslt
$make_data = make_data[
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 80],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Pencil', 'price' => 30],
    ['product' => 'Door', 'price' => 100],
]);

$filtered = $make_data->whereBetween('price', [100, 200]);

$filtered->all();
```
Output
```$xslt
 [
         ['product' => 'Desk', 'price' => 200],
         ['product' => 'Bookcase', 'price' => 150],
         ['product' => 'Door', 'price' => 100],
     ]
```
### `whereIn()`
The whereIn method filters the data array by a given key / value contained within the given array:
```$xslt
$make_data = make_data[
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
]);

$filtered = $make_data->whereIn('price', [150, 200]);

$filtered->all();
```
Output
```$xslt
 [
         ['product' => 'Bookcase', 'price' => 150],
         ['product' => 'Desk', 'price' => 200],
     ]
```
### `whereNotBetween()`
The whereNotBetween method filters the data array within a given range:
```$xslt
$make_data = make_data[
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 80],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Pencil', 'price' => 30],
    ['product' => 'Door', 'price' => 100],
]);

$filtered = $make_data->whereNotBetween('price', [100, 200]);

$filtered->all();
```
Output
```$xslt
 [
         ['product' => 'Chair', 'price' => 80],
         ['product' => 'Pencil', 'price' => 30],
     ]
```
### `whereNotIn()`
The whereNotIn method filters the data array by a given key / value not contained within the given array:
```$xslt
$make_data = make_data[
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
]);

$filtered = $make_data->whereNotIn('price', [150, 200]);

$filtered->all();
```
Output
```$xslt
 ['product_id' => 1, 'name' => 'Desk']
```
### `wrap()`
The static wrap method wraps the given value in a data array when applicable:
```$xslt
$make_data = Collection::wrap('John Doe');
$make_data->all();

```
Output
```$xslt
  ['John Doe']
```
### `zip()`
The zip method merges together the values of the given array with the values of the original data array at the corresponding index:
```$xslt
$make_data = make_data['Chair', 'Desk']);

$zipped = $make_data->zip([100, 200]);

$zipped->all();
```
Output
```$xslt
 [['Chair', 100], ['Desk', 200]]
```
