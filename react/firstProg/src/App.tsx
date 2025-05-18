import "./styles/global.css";
import "./styles/theme.css";

// Importando os componentes
import { Container } from "./components/Container";
import { Heading } from "./components/Heading";

// Aqui estamos importando minha function direto
export function App() {
  console.log("Teste");
  // Retorna apenas um elemento JSX, por isso utilizo dentro de uma div ou <></>
  return (
    <>
      <Container>
        <section>
          <Heading>LOGO</Heading>
        </section>
      </Container>

      {/* 
      FAZ A MESMA COISA QUE O CÓDIGO ACIMA
      <div className="container">
        <div className="content">
          <section>Logo</section>
        </div>
      </div> 
      */}

      <Container>
        <Heading>MENU</Heading>
      </Container>
    </>
  );
}

// export { App }; || export default App;
