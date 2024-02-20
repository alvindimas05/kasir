let products = [];
let transactionProducts = [];

async function setProductList(){
    const res = await axios.get(productsUrl);
    res.data.forEach(function (dat){
        $('#product-list').append(`<option value="${dat.id}">${dat.name}</option>`)
    });
    products = res.data;

    $('#product-list').change(addProduct);
}

function addProduct(){
    $(`#product-list>option[value=${this.value}]`).remove();
    transactionProducts.push(this.value);

    const product = products.find((product) => product.id.toString() === this.value);
    $('tbody').append(`
        <tr>
            <td>${transactionProducts.length}.</td>
            <td>${product.name}</td>
            <td>Rp. 250000</td>
            <td class="text-center">
                <i class="fa fa-trash text-red-500"></i>
            </td>
        </tr>
    `)
}

setProductList();
