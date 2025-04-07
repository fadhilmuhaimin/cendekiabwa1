import * as React from 'react';

import { cn } from '@/lib/utils';

const Textarea = React.forwardRef(({ className, ...props }, ref) => {
    return (
        <textarea
            className={cn(
                'border-input placeholder:text-muted-foreground flex min-h-24 w-full resize-none rounded-md border bg-transparent px-3 py-2 text-base shadow-sm focus-visible:ring-2 focus-visible:ring-orange-500 focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm',
                className,
            )}
            ref={ref}
            {...props}
        />
    );
});
Textarea.displayName = 'Textarea';

export { Textarea };
