Cubalider Sms Queue As Abstract
===============================

This library provides an abstraction for sms queues concepts.

## Message

Messages can be pushed to a queue as bulks.

You need to create your manager implementing `MessageManagerInterface`.

```
// $manager = new MessageManager();

// Pushes messages
$bulk1 = $manager->push(array(
    new Message("Message 1.1"),
    new Message("Message 1.2"),
    new Message("Message 1.3")
));
$bulk2 = $manager->push(array(
    new Message("Message 2.1"),
    new Message("Message 2.2"),
    new Message("Message 2.3")
));

// Pops from first bulk in queue
$messages = $manager->pop(2);
// $messages contain messages "Message 1.1", "Message 1.2"

// Estimates number of messages from bulk
$rest = $manager->estimate($bulk1);
// $rest is 1

// Pops again
$messages = $manager->pop(2);
// $messages contain messages "Message 1.3"

// Estimates again
$rest = $manager->estimate($bulk1);
// $rest is false because $bulk1 was removed

// Pops from next bulk
$messages = $manager->pop(2);
// $messages contain messages "Message 2.1", "Message 2.2"
```