import AppLayout from '@/Layouts/AppLayout';

export default function Dashboard() {
    return <div>Ini Dashboard</div>;
}
Dashboard.layout = page => <AppLayout title="Dashboard" children={page} />;
