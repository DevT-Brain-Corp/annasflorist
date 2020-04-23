<table>
    <tr>
        <td>Product 1</td>
        <td>
            <input type="number" id="product1" class="formnumbers" name="ProductOne" onChange="changeTotalFromCount(this);" onLoad="changeTotalFromCount(this);" min="1" data-unitprice="7" />
        </td>
        <td><span id="1"></span>

        </td>
    </tr>
    <tr>
        <td>Product 2</td>
        <td>
            <input type="number" id="product2" class="formnumbers" name="ProductTwo" onChange="changeTotalFromCount(this);" onLoad="changeTotalFromCount(this);" min="1" data-unitprice="10" />
        </td>
        <td><span id="2"></span>

        </td>
    </tr>
    <tr>
        <td>Product 3</td>
        <td>
            <input type="number" id="3" class="formnumbers" name="ProductThree" onChange="changeTotalFromCount(this);" onLoad="changeTotalFromCount(this);" min="1" data-unitprice="3" value="2" />
        </td>
        <td><span id="3"></span>

        </td>
    </tr>
    <tr>
        <td>Total Price</td>
        <td></td>
        <td id="totalPriceDisplay">TOTAL PRICE HERE</td>
    </tr>
</table>
