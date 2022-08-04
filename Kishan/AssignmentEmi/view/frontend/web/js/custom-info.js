define([
    'jquery',
    'uiComponent',
    'Magento_Customer/js/customer-data'
], function ($, Component, customerData) {
    'use strict';
    return Component.extend({
        initialize: function () {
            this._super();
            // this.customerdata = customerData.get('customerdata');
            var gender = this.customerdata().customergender;
            let emiDatas = this.emiData;
            let emiArray = [];
            let price = this.price;
            emiDatas.forEach((data) => {
                if (data.gender===gender) {
                    let principle = (price * data.interest_rate * data.tenure);
                    let emitotal = principle/1200;
                    let totalPrice = Number(price) + Number(emitotal);
                    let monthlypay = totalPrice/data.tenure;
                    emiArray.push({emiplan:+monthlypay.toFixed(2)+ 'x' +data.tenure + 'm', interest:+ emitotal, totalcost:+totalPrice});
                }

            });
            console.log(emiArray,'abckum');
            emiArray.forEach(res =>{
                var row= document.createElement("tr");
                row.className="emi-row";
                Object.values(res).map(value => {
                    var column= document.createElement("td");
                    column.innerText=value;
                    row.appendChild(column)
                })
                document.getElementById('emi_table').appendChild(row);
            })
            $(document).ready(function () {
                $('.emi_table').hide(0);
                $('.emi-link').on('click',function () {
                    $('.emi_table').toggle();
                });
            });
        }
    });
});

