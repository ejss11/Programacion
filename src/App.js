import logo from './assets/imagenes/logo.svg';
import './assets/css/App.css';
//importanto el titulo nombre de la tienda
import titulo from "./components/titulo";
import productos from "./components/productos";
function App() {
  return (
    <div className="App">
      <header className="App-header">
        <div className="logocarrito">
        <section className="logo">
          <articule></articule>
        </section>
        <section className="buscar">
          <form>
            <input type="text" name="buscar" className="input"></input>
            <button>buscar</button>
          </form>
        </section>
      </div>
        
        
        
      </header>

    
    </div>
    
  );
}

export default App;
