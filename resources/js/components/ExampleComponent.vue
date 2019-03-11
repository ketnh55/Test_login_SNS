<template>
<div>
        <p>{{message}}</p>
        <!--<input v-model="message">-->
        <button @click="inverse_message">Reversea</button>
</div>
</template>

<script>

    export default {
            props:{
                    message_: {type: String , default:'dinh cong menh nha no nua'}
            },
        data: function (){
                return {
                        message: this.message_
                }
        },
        beforeCreate(){
            console.log('Component before.');

        },

        created(){
                    console.log('Component created.')
        },
            beforeMount() {
                console.log('Component before moute')
            },
        mounted() {
                console.log('Component moute');
                //this.message = 'dkm no';
        },
            beforeUpdate() {
                    console.log('Component before update')
            },
            updated() {
                console.log('Component updated')
            },
            beforeDestroy() {
                    console.log('Component before destroy')
            },
            destroyed() {
                    console.log('Component destroy')
            },
                methods:{
                        inverse_message()
                        {

                                console.log('inverse message');
                                this.message = this.message.split('').reverse().join();
                        }
                }
    }
</script>
