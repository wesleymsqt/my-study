import styles from './styles.module.css';

type DefaultInputProps = { 
  id: string;
  labelText?: string; // ? -> torna opcional
} & React.ComponentProps<'input'>;
// Aqui estou definindo que o DefaultInput recebe todas as propriedades de um input do JSx

export function DefaultInput({ 
  id, 
  labelText, 
  type, 
  ...rest 
}: DefaultInputProps) {
  return (
    <>
      {/* {condição ? 'Verdadeiro' : 'Falso'} */}
      {/* {labelText ? <label htmlFor={id}>{labelText}</label> : ''} */}

      {/* ou {condição && 'Verdadeiro'} */}
      {labelText && <label htmlFor={id}>{labelText}</label>}
      <input className={styles.input} id={id} type={type} {...rest}/>
    </>
  );
}