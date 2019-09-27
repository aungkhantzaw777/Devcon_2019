import Vue from 'vue'

new Vue({
    el:"#app",
    data:{
        eyes:{
            type:'password',
            icon:'far fa-eye-slash'
        }
    },
    methods:{
        eyesMethod() {
            this.eyes.type === 'password' ? this.eyesOpen() : this.eyesClose()
        },
        eyesClose() {
            this.eyes = {type:'password', icon:'far fa-eye-slash'}
        },
        eyesOpen(){
            this.eyes = {type:'text', icon:'far fa-eye'}
        }
    }
})