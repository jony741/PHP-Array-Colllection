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
The collapse method collapses a data array of arrays into a single, flat collection:
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
The combine method combines the values of the collection, as keys, with the values of another array or collection:
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
The concat method appends the given array or data array values onto the end of the collection:
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

$diff = make_data->diffKeys([
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
The flip method swaps the collection's keys with their corresponding values:
```$xslt
$make_data = make_data(['name' => 'taylor', 'framework' => 'laravel']);

$flipped = $make_data->flip();

$flipped->all();
```
Output
```$xslt
 ['jony' => 'name', 'laravel' => 'framework']
```
### `forget()`
The forget method removes an item from the data array by its key:
```$xslt
$make_data = make_data(['name' => 'taylor', 'framework' => 'laravel']);

$make_data->forget('name');

$make_data->all();


```
Output
```$xslt
  ['framework' => 'laravel']
```
### `get()`
The get method returns the item at a given key. If the key does not exist, null is returned:
```$xslt
$make_data = make_data(['name' => 'Jony', 'framework' => 'laravel']);

$value = $make_data->get('name');

```
Output
```$xslt
 Jony
```
### `groupBy()`
The groupBy method groups the collection's items by a given key:
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
The has method determines if a given key exists in the collection:
```$xslt
$make_data = make_data(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]);

$make_data->has('product');

```
Output
```$xslt
 true
```
### `implode()`
The implode method joins the items in a collection. Its arguments depend on the type of items in the collection. If the data array contains arrays or objects, you should pass the key of the attributes you wish to join, and the "glue" string you wish to place between the values:
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
The intersect method removes any values from the original data array that are not present in the given array or collection. The resulting data array will preserve the original collection's keys:
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
The intersectByKeys method removes any keys from the original data array that are not present in the given array or collection:
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
The keyBy method keys the data array by the given key. If multiple items have the same key, only the last one will appear in the new collection:
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
The keys method returns all of the collection's keys:
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
$max = make_data([['foo' => 10], ['foo' => 20]])->max('foo');

```
Output
```$xslt
 20
 5
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
The chunk method breaks  into multiple
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

$chunks->toArray();
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
The chunk method breaks  into multiple
```$xslt
$make_data = make_data(['A', 'B', 'C']);

$filtered = $make_data->pad(5, 0);

$filtered->all();

```
Output
```$xslt
 ['A', 'B', 'C', 0, 0]
`
