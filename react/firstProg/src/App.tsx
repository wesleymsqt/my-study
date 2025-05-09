import "./styles/global.css";
import "./styles/theme.css";
// import "./App.css";
import { Heading } from "./components/Heading";

// Aqui estamos importando minha function direto
export function App() {
  console.log("Teste");

  // Retorna apenas um elemento JSX, por isso utilizo dentro de uma div ou <></>
  return (
    <>
      <Heading/>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam quam iste mollitia maiores quae nostrum aliquam distinctio, tempore beatae, dolorem dolore eligendi similique tempora et neque, porro modi soluta dolor!</p>
    </>
  );
}

// Ou
// export { App };
// export default App;
