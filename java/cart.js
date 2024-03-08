// Hàm cập nhật giỏ hàng và giao diện
function updateCart() {
    // Lấy các phần tử cần thiết từ DOM
    const numArrElement = document.getElementById('numArr');
    const sumPriceElement = document.getElementById('sum-price');
    const shippingPriceElement = document.getElementById('shipping-price');
    const taxElement = document.getElementById('tax');
    const priceElement = document.getElementById('price');

    // Lấy số lượng sản phẩm trong giỏ hàng
    const numArr = parseInt(numArrElement.innerHTML);

    // Tính toán tổng giá trị và cập nhật giao diện
    const sumPrice = calculateSumPrice(numArr);
    sumPriceElement.innerHTML = enPriceVnd(sumPrice);

    // Kiểm tra nếu giỏ hàng rỗng thì ẩn phí vận chuyển và thuế
    if (sumPrice === 0) {
        taxElement.innerHTML = 0;
        priceElement.innerHTML = 0;
        shippingPriceElement.innerHTML = 0;
    } else {
        // Nếu không rỗng, cập nhật phí vận chuyển, thuế và tổng chi phí
        const shippingPrice = dePriceVnd(shippingPriceElement.innerHTML);
        const tax = parseFloat(taxElement.innerHTML);
        const totalCost = sumPrice + shippingPrice + (sumPrice / 100) * tax;
        priceElement.innerHTML = enPriceVnd(totalCost);
    }
}

// Hàm tính tổng giá trị của giỏ hàng
function calculateSumPrice(numArr) {
    let sumPrice = 0;
    for (let i = 0; i < numArr; i++) {
        const sumItemElement = document.getElementById(`sum-item-${i}`);
        if (sumItemElement) {
            const sumItem = dePriceVnd(sumItemElement.innerHTML);
            reloadPriceItem(i); // Cập nhật giá trị từng sản phẩm
            sumPrice += sumItem;
        }
    }
    return sumPrice;
}

// Hàm cập nhật giá và tổng giá của sản phẩm cụ thể
function reloadPriceItem(num) {
    const priceItemElement = document.getElementById(`price-item-${num}`).innerHTML;
    const quantityItemElement = document.getElementById(`quantity-${num}`).value;
    const sumItemElement = document.getElementById(`sum-item-${num}`);

    const priceItem = dePriceVnd(priceItemElement);
    const quantityItem = parseInt(quantityItemElement);

    // Cập nhật tổng giá của sản phẩm
    const sumItem = priceItem * quantityItem;
    sumItemElement.innerHTML = enPriceVnd(sumItem);
}

// Hàm chuyển đổi chuỗi giá từ VND sang số
function dePriceVnd(price) {
    return parseInt(price.replace(/\D/g, ''));
}

// Hàm chuyển đổi số sang chuỗi giá VND
function enPriceVnd(price) {
    return price.toLocaleString() + ' VND';
}

// Hàm thực hiện thay đổi số lượng sản phẩm trong giỏ hàng
function quantity(num_, num) {
    const quantityElement = document.getElementById(`quantity-${num_}`);
    const max = Number(quantityElement.getAttribute('max'));
    const min = Number(quantityElement.getAttribute('min'));
    let qa = quantityElement.value;

    if (num === -1 && qa > min) {
        quantityElement.value--;
    } else if (num === 1 && qa < max) {
        quantityElement.value++;
    }

    // Cập nhật giá trị của sản phẩm và tổng giá của giỏ hàng
    reloadPriceItem(num_);
    updateCart();
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function removeCartItem(num) {
    const myObj = document.getElementById(`item-${num}`);
    myObj.remove();
    updateCart();
}

// Cập nhật giỏ hàng khi trang được load
document.addEventListener('DOMContentLoaded', updateCart);
