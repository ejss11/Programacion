import React from "react";


class productos extends React.Component{
    constructor (Productos) {
        super(Productos)
        
        this.state = {
            Productos:[],
            isFetch: true,
        }
    
    }
ComponentDidMount (){
        fetch('https://5d8cdb5a443e3400143b4bea.mockapi.io/corebizchile/products')
        .then(Response => console.log(Response))
        .then(productosjson => this.setState({productos: productosjson.result, isFetch:false}))
    }

  
  render (){
      if (this.state.isFetch){
          return 'Loading...'
      }
  }
}
export default productos