const app= require("express")();
const PORT= process.env.PORT || 3000;

app.listen("",(req, res)=>{
    res.send("Hello World");
});

app.listen(PORT,()=>{
    console.log('App up at port ${PORT}');

});