import React from "react";
import EventSummary from "../../components/EventSummary";

const Listing = () => {
  // mocks
  const eventList = [
    { id: 1, name: "My Event 1" },
    { id: 2, name: "My Event 2" },
    { id: 3, name: "My Event 3" }
  ];
  return (
    <>
      {eventList.map((event) => (
        <EventSummary key={event.id} eventId={event.id} eventName={event.name} />
      ))}
    </>
  );
};

export default Listing;
