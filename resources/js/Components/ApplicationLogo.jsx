import { cn } from '@/lib/utils';
import { Link } from '@inertiajs/react';
import { IconInnerShadowBottomRight } from '@tabler/icons-react';

export default function ApplicationLogo({ url = '#', size = 'size-9', isTitle = true }) {
    return (
        <Link href={url} className="flex items-center gap-2">
            <IconInnerShadowBottomRight className={cn('text-orange-500', size)} />

            {isTitle && (
                <div className="flex flex-col">
                    <span className="text-foreground leading-none font-bold">Cendekia</span>
                    <span className="text-muted-foreground text-xs font-medium">Pengetahuan Tanpa Batas</span>
                </div>
            )}
        </Link>
    );
}
