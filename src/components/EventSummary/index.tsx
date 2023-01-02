import React from "react";
type Props = {
    eventId: number;
    eventName: string;
  };

const EventSummary = ({ eventId, eventName}: Props) => {
  return (
    <>
      <div>EventSummary</div>
      <span>{eventId}</span>
      <span>{eventName}</span>
    </>
  );
};

export default EventSummary;
