import * as React from 'react';

import { cn } from '@/lib/utils';

const Input = React.forwardRef(({ className, type, size = 12, ...props }, ref) => {
    return (
        <input
            type={type}
            className={cn(
                'border-input file:text-foreground placeholder:text-muted-foreground flex w-full rounded-md border bg-transparent p-3 py-1 text-base shadow-none transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:ring-2 focus-visible:ring-orange-500 focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm',
                className,
                size,
            )}
            ref={ref}
            {...props}
        />
    );
});
Input.displayName = 'Input';

export { Input };
