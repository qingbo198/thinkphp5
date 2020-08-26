//购物车
new Vue({
    el: '#shop',
    data: {
        tota: '',
        sum: 1493,
        shopdata: [
            {'id': 1, 'name': '衬衫', 'num': 1, 'price': 99, 'sub': 99},
            {'id': 2, 'name': '毛衣', 'num': 2, 'price': 299, 'sub': 598},
            {'id': 3, 'name': '裤子', 'num': 4, 'price': 199, 'sub': 796},
        ]


    },
    methods: {
        add: function (index) {
            // console.log(JSON.stringify(this.shopdata));
            //console.log(index);
            this.shopdata[index].num++;
            this.shopdata[index].sub = this.shopdata[index].num * this.shopdata[index].price;
            this.total();
        },
        reduce: function (index) {
            if (this.shopdata[index].num == 1) {
                return false;
            }
            this.shopdata[index].num--;
            this.shopdata[index].sub = this.shopdata[index].num * this.shopdata[index].price;
            this.total();
        },
        total: function () {
            for (var i = 0, tota = 0; i < this.shopdata.length; i++) {
                tota += this.shopdata[i].sub
            }
            this.sum = tota;
        }
    }

})

//列表增删
new Vue({
    el: '#edit',
    data: {
        person: '',
        // inputPerson:{'name':this.person},
        list: [
            {'name': '小明'},
            {'name': '小花'},
            {'name': '小亮'},
        ]
    },
    computed: {
        inputPerson(){
            return {'name': this.person}
        }
    },
    methods: {
        add: function () {
            let that = this;
            if(that.person==''){
                return false;
            }
            that.list.unshift(that.inputPerson);
        },
        dele:function(index){
            let that = this;
            that.list.splice(index,1);
        }
    }
})


