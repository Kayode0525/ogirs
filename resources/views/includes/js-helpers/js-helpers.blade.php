<script>
    function formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
        try {
            decimalCount = Math.abs(decimalCount);
            decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

            const negativeSign = amount < 0 ? "-" : "";

            let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
            let j = (i.length > 3) ? i.length % 3 : 0;

            return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
        } catch (e) {
            console.log(e)
        }
    }

    const getSum = (total, num) => {
        return total + num;
    };

    const sumDebits = data => {
        let debitArr = data.map(data => {
            return data.Debits;
        });

        var total = 0;

        if (debitArr.length > 0) {
            total = debitArr.reduce(getSum);
        }

        return total;
    };

    const sumCredits = data => {
        var total = 0;

        let creditArr = data.map(data => {
            return data.Credits;
        });

        if (creditArr.length > 0) {
            total = creditArr.reduce(getSum);
        }

        return total;
    };

    function formatDate(d) {
        let date = new Date(d);
        var monthNames = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        return day + " " + monthNames[monthIndex] + " " + year;
    }
</script>
