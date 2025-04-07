export default function InputError({ message, className = '', ...props }) {
    return message ? (
        <p {...props} className={'text-sm font-medium text-red-600 ' + className}>
            {message}
        </p>
    ) : null;
}
