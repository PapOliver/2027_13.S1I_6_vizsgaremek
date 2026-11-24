<template>
    <div>
        <h1>ZonneControl</h1>
    </div>

    <div>
        <table>
            <tr>
                <td>
                    <button @click="handleClick">
                        <table> 
                            <tr>
                                <td>Hotel 1</td>
                            </tr>
                        </table>
                    </button>
                </td>
                
            </tr>
            <tr>
                <td>
                    <button @click="handleClick">
                        <table> 
                            <tr>
                                <td>Hotel 2</td>
                            </tr>
                        </table>
                    </button>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: 'MainVue',
    methods: {
        handleClick() {
            alert('Button clicked!');
        }
    }
}

</script>

<style scoped>
body
{
    background-color: black;
}

h1 {
    color: #42b983;
    font-size: 36px;
    
    text-align: center;
    margin-top: 50px;
}

table {
    text-align: center;
    margin: 50px auto;
}

td
{
    color: white;
    font-size: 18px;
    padding: 10px;
    background-color: #343434;
}
</style>
