// Importa a biblioteca `clsx` para construir nomes de classe condicionalmente.
import clsx from 'clsx';
 
// O componente recebe uma prop `status` que pode ser 'pending' ou 'paid'.
export default function InvoiceStatus({ status }: { status: string }) {
  return (
    <span
      // `clsx` junta todas as classes em uma única string.
      className={clsx(
        // 1. Estas são as classes base, aplicadas sempre.
        'inline-flex items-center rounded-full px-2 py-1 text-sm',
        // 2. Este objeto aplica classes com base em uma condição.
        //    A classe da esquerda só é aplicada se a condição da direita for verdadeira.
        {
          'bg-gray-100 text-gray-500': status === 'pending',
          'bg-green-500 text-white': status === 'paid',
        },
      )}
    >
        
      {status}
    </span>
  );
}