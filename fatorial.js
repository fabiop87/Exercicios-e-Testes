function factorialize(num) {
    if (num< 0) {
    return "salsicha"
    }
    else if (num == 0) {
    return 1
    }
    else {
    let roadToOne = [];
    for (let i = num; i > 0; i--) {
    roadToOne.push(i)
    }
    let fact = roadToOne.reduce((a, b) => a * b)
    return fact
    }
    }