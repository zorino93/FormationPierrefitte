for (var nb = 0; nb <= 100; nb++) {
    if ((nb % 3 === 0) && (nb % 5 === 0)) {
        document.write("FizzBuzz<br>");
    }
    else if (nb % 3 === 0) {
        document.write("Fizz<br>");
    }
    else if (nb % 5 === 0) {
        document.write("Buzz<br>");
    }
    else {
        document.write(nb + "<br>");
    }

}