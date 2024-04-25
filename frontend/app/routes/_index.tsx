import type { MetaFunction } from "@remix-run/node";
import { json } from "@remix-run/node";
import { useLoaderData } from "@remix-run/react";

export const meta: MetaFunction = () => {
  return [
    { title: "New Remix App" },
    { name: "description", content: "Welcome to Remix!" },
  ];
};

export const loader = async () => {
  // assuming the backend is running @ localhost:8000 & allows Access from this origin
  const res = await fetch("http://127.0.0.1:8000/api/tasks");
  if (!res.ok) throw new Error("Failed to fetch data");
  return json(await res.json());
};

export default function Index() {
  const { data: tasks } = useLoaderData<typeof loader>();
  return (
    <div>
      Remix Frontend - OK
      <h1>Tasks</h1>
      <ul>
        {tasks &&
          tasks.map((task, id) => (
            <li key={`${task.title}-${id}`}>{task.title}</li>
          ))}
      </ul>
    </div>
  );
}
