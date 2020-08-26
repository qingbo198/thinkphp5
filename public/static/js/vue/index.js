new Vue({
    el:'#sub',
    data:{
        formData: {
            name: "",
            phone: "",
            six: "",
            hobby: "",
        }
    },
    methods:{
        submitFrom:function() {
             //var Data = JSON.stringify(this.formData);
            //console.log(Data);
            let data = new FormData();
            for(let key in this.formData){
                data.append(key,this.formData[key]);
            };

            axios({
                method:'post',
                url:'index',
                headers: {
                    "Content-Type": "multipart/form-data"
                },
                withCredentials:true,
                data:data
            }).then((res)=>{
                console.log(res);
            })


        }
    }
})



 new Vue({
    el:"#app-7",
    data:{
        groceryList:[
            {id:0,text:"蔬菜"},
            {id:1,text:"水果"},
            {id:2,text:"食物"}
        ]
    }
})

Vue.component('button-counter',{
    data:function(){
        return{
            count:0
        }
    },
    methods:{
        counter:function () {
            this.count++
        }
    },
    template:'<button v-on:click="counter">you clicked me {{count}} times.</button>'
})


new Vue({ el: '#components-demo' })


