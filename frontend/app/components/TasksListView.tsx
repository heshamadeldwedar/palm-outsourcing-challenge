'use client';

import { Accordion, AccordionContent, AccordionPanel, AccordionTitle, Badge } from "flowbite-react";


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

type TasksListViewProps = {
    tasks: Task[];
}

export default function TasksListView (props: TasksListViewProps) {
    const { tasks } = props;
    return (
        <Accordion className="text-gray-500" collapseAll>
            {
                tasks.map((task) => {
                    return (
                        <AccordionPanel key={task.id}>
                            <AccordionTitle><div className="flex gap-2">{task.title} - <Badge color={task.status.color}>{task.status.name}</Badge></div></AccordionTitle>
                            <AccordionContent>{task.description}</AccordionContent>
                        </AccordionPanel>
                    )
                })
            }
        </Accordion>
    );
}