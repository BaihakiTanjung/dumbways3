// let array = ['1' => 'u', '4' => 'W', '12' => 'd', '9' => 'o', '3' => 'b', '8' => 'd', '0' => 'D', '7' => 's', '6' => 'y', '2' => 'm', '11' => 'i', '10' => 't', '5' => 'a'];

let array = {
    1: 'u',
    4: 'W',
    12: 'd',
    9: 'o',
    3: 'b',
    8: 'd',
    0: 'D',
    7: 's',
    6: 'y',
    2: 'm',
    11: 'i',
    10: 't',
    5: 'a'
}

// let array = [1, 2, 3, 4, 5, 3, 3, 4, 2];

function bubbleSort(array) {
    let i, j, lim;
    lim = array.length;
    while (lim--) {
        for (i = 0, j = 1; i < lim; ++i, ++j)
            if (array[i] > array[j]) {
                let temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
    }
    return array;
}

console.log(Object.values(bubbleSort(array)));

let cetak = document.querySelector('.cetak');
cetak.innerHTML = Object.values(bubbleSort(array));