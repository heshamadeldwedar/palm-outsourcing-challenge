import NoTaskComponents from './components/NoTasks';
import TasksListView from './components/TasksListView';

type Task = {
  id: number;
  title: string;
  description: string;
  status: Status;
};

type Status = {
  name: string;
  color: string;
};


export default async function Home() {

  const data = await fetch('http://backend:8000/tasks');
  const tasks: Task[] = await data.json();


  return (
    <main className="flex min-h-screen gap-2">
      {
        tasks.length > 0 ? (
          <div className='w-full'>
            <TasksListView tasks={tasks} />
          </div>
        ) : (
          <NoTaskComponents />
        )
      }
    </main>
  );
}
